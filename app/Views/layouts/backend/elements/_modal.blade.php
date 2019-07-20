<div id="model_confirm_delete" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    <span>Are You Sure Want To Delete ?</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_custom bg_grey pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="" class="btn_custom pull-right">Delete</button>
                    <div style="clear: both"></div>
                </div>
            </div>
        </form>
    </div>
</div>