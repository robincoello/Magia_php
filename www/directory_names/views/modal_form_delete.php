
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#directory_names_delete_">
    <span class="glyphicon glyphicon-plus"></span> 
    <?php _t("Add new"); ?>
</button>

<!-- Modal -->
<div class="modal fade" id="directory_names_delete_" tabindex="-1" role="dialog" aria-labelledby="directory_names_delete_Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="directory_names__delete_Label"> <?php _t("Add"); ?></h4>
            </div>
            <div class="modal-body">
                <?php include views("directory_names", "form_delete"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php _t("Close"); ?></button>
                <button type="button" class="btn btn-primary"><?php _t("Save"); ?></button>
            </div>
        </div>
    </div>
</div>