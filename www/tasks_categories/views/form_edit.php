<form class="form-horizontal" action="index.php" method="post" >
    <input type="hidden" name="c" value="tasks_categories">
    <input type="hidden" name="a" value="ok_edit">
    <input type="hidden" name="id" value="<?php echo "$id"; ?>">
    <input type="hidden" name="redi" value="<?php echo $redi; ?>">

    <?php # father_id ?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="father_id"><?php _t("Father_id"); ?></label>
        <div class="col-sm-8">
            <select name="father_id" class="form-control selectpicker" id="father_id" data-live-search="true" >
                <?php tasks_categories_select("id", "id", $tasks_categories['father_id'], array()); ?>                        
            </select>
        </div>	
    </div>
    <?php # /father_id ?>

    <?php # category ?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="category"><?php _t("Category"); ?></label>
        <div class="col-sm-8">
            <input type="text" name="category" class="form-control" id="category" placeholder="category" value="<?php echo $tasks_categories['category']; ?>" >
        </div>	
    </div>
    <?php # /category ?>

    <?php # color ?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="color"><?php _t("Color"); ?></label>
        <div class="col-sm-8">
            <input type="text" name="color" class="form-control" id="color" placeholder="color" value="<?php echo $tasks_categories['color']; ?>" >
        </div>	
    </div>
    <?php # /color ?>

    <?php # icon ?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="icon"><?php _t("Icon"); ?></label>
        <div class="col-sm-8">
            <input type="text" name="icon" class="form-control" id="icon" placeholder="icon" value="<?php echo $tasks_categories['icon']; ?>" >
        </div>	
    </div>
    <?php # /icon ?>

    <?php # order_by ?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="order_by"><?php _t("Order_by"); ?></label>
        <div class="col-sm-8">
            <input type="number" name="order_by" class="form-control" id="order_by" placeholder="order_by" value="<?php echo $tasks_categories['order_by']; ?>" >
        </div>	
    </div>
    <?php # /order_by ?>

    <?php # status ?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="status"><?php _t("Status"); ?></label>
        <div class="col-sm-8">
            <select name="status" class="form-control" id="status" >                
                <option value="1" <?php echo ($tasks_categories["status"] == 1 ) ? " selected " : ""; ?> ><?php echo _t("Actived"); ?></option>
                <option value="0" <?php echo ($tasks_categories["status"] == 0 ) ? " selected " : ""; ?> ><?php echo _t("Blocked"); ?></option>
            </select>
        </div>	
    </div>
    <?php # /status ?>


    <div class="form-group">
        <label class="control-label col-sm-3" for=""></label>
        <div class="col-sm-8">    
            <input class="btn btn-primary active" type ="submit" value ="<?php _t("Edit"); ?>">
        </div>      							
    </div>      							

</form>

