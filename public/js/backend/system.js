$(document ).ready(function() {
    SystemController.init();
    SystemController.submitForm();

});

var SystemController = {
    init: function () {
        $('button[name="delete"]').click(function () {
            $('#model_confirm_delete form').attr('action',  $(this).data('form-action'));
            $('#model_confirm_delete').modal('show');
        })
    },

    submitForm: function () {
        $('form').on('submit', function () {
            $.LoadingOverlay("show", {zIndex: 999999999});
            return true;
        });
    }
};
