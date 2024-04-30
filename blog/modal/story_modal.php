<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"><b>Update Deduction</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="story_edit.php">
                    <input type="hidden" class="decid" name="id">
                    <div class="form-group">
                        <label for="edit_story" class="col-sm-3 control-label">Edit story</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_story" name="story">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!--Delete Modal-->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="story_delete.php">
                    <!-- Input field to store post ID -->
                    <input type="hidden" class="decid" name="id">
                    <div class="text-center">
                        <p>DELETE DEDUCTION</p>
                        <h2 id="del_deduction" class="bold"></h2>
                    </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>