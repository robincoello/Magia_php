

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tasks_status_add_">
    <span class="glyphicon glyphicon-plus"></span> 
    <?php _t("Add new"); ?>
</button>

<!-- Modal -->
<div class="modal fade" id="tasks_status__add_" tabindex="-1" role="dialog" aria-labelledby="tasks_status_add_Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tasks_status_add_Label"> <?php _t("Add"); ?></h4>
            </div>
            <div class="modal-body">
                <?php
                $redi = 1;
                include views("tasks_status", "form_add");
                $redi = "";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php _t("Close"); ?></button>
                <button type="button" class="btn btn-primary"><?php _t("Save"); ?></button>
            </div>
        </div>
    </div>
</div>


