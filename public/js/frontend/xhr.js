var requestTimeout = {};
var CHECK_REQUEST_TIMEOUT = 1;
sendRequest = function (options, callbackFunc) {
    var now = new Date();
    if (!checkRequest(options.url, now)) {
        return false;
    }
    var ajaxOptions = {
        error: function (response, exception) {
            try {
                responsex = JSON.parse(response.responseText);
                var msg = '';
                switch (true) {
                    case responsex.message != '':
                        msg = responsex.message;
                        break;
                    case exception === 'parsererror':
                        msg = 'Requested JSON parse failed.';
                        break;
                    case exception === 'timeout':
                        msg = 'Time out error.';
                        break;
                    case exception === 'abort':
                        msg = 'Ajax request aborted.';
                        break;
                    default:
                        msg = 'Uncaught Error.\n' + response.responseText;
                        break;
                }
            } catch (e) {
                msg = 'System error !';
            }
            var res = {
                data: {},
                code: response.status,
                ok: false,
                message: msg
            };
            return callbackFunc(res);
        },
        success: function (response) {
            response = JSON.parse(response);
            return callbackFunc(response);
        },
        type: 'post',
        dataType: 'text',
        crossDomain: true,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-Token': $('input[name="_token"]').val()
        },
        beforeSend: function () {
            showLoading();
        },
        complete: function () {
            hideLoading();
        }
    };
    $.extend(ajaxOptions, options);
    $.ajax(ajaxOptions);
};
checkRequest = function (url, time) {
    if (!requestTimeout._g(url, false)) {
        requestTimeout._s(url, time);
        return true;
    }
    var requestOldTime = requestTimeout._g(url, 0);
    if (time - requestOldTime >= CHECK_REQUEST_TIMEOUT) {
        requestTimeout._s(url, time);
        return true;
    }
    return false;
};

function example() {

    sendRequest({
        url: 'test',
        type: 'GET',
        data: {},
    }, function (response) {
        if (!response.ok) {
            return showErrorFlash(response.message);
        }
        console.log(response.data);
    });
}

function showLoading() {
    $.LoadingOverlay("show", {zIndex: 999999999});
}

function hideLoading() {
    $.LoadingOverlay("hide");
}

Object.defineProperty(Object.prototype, '_g', {
    value: function (keyData, defaultValue) {
        defaultValue = typeof defaultValue == 'undefined' ? objectEmpty : defaultValue;
        var obj = this;
        for (var key in obj) {
            if (keyData != key) {
                continue
            }
            return this[key] ? this[key] : defaultValue;

        }
        return defaultValue;
    },
    enumerable: false
});

Object.defineProperty(Object.prototype, '_s', {
    value: function (key, data) {
        if (typeof  key == 'object') {
            Object.defineProperty(this, data, {
                value: data,
                writable: true,
                enumerable: true,
                configurable: true
            });
        } else {
            Object.defineProperty(this, key, {
                value: key,
                writable: true,
                enumerable: true,
                configurable: true
            });
            this[key] = data;
        }
        return this;
    },
    enumerable: false
});