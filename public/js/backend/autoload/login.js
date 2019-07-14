$( document ).ready(function() {
    $('.login_form button.submit').click(function () {
        sendRequest({
            url: $('.login_form').attr('action'),
            type: 'POST',
            data: $('.login_form').serialize()
        }, function (response) {
            if (response.status) {
                return window.location.href = '{{route("dashboard")}}'; //using a named route
            }
        });
    });
});

