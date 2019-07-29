"use strict";

$(document).ready(function () {
    AdminControler.init();
});

var AdminControler = {
    init: function () {
        AdminControler.handleClickLinkSort();
    },

    handleClickLinkSort: function () {
        $('.link_sort').click(function () {
            var queryStr = window.location.href;
            if (queryStr.includes('sort_type=desc')) {
                queryStr = queryStr.replace("desc", "asc");
            } else if (queryStr.includes('sort_type=asc')) {
                queryStr = queryStr.replace("asc", "desc");
            }
            return queryStr;
        });
    }
};

