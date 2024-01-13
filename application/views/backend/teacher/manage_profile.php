<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-user"></i>
                    <?php echo ('Manage Profile'); ?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----EDITING FORM STARTS---->
            <div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content">
                    <?php
                    foreach ($edit_data as $row) :
                    ?>
                        <?php echo form_open(base_url() . 'index.php?teacher/manage_profile/update_profile_info', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data')); ?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Email'); ?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo ('Photo'); ?></label>
                            <div class="col-sm-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                        <img src="<?php echo $this->crud_model->get_image_url('teacher', $row['teacher_id']); ?>" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="userfile" accept="image/*">
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo ('Update_profile'); ?></button>
                            </div>
                        </div>
                        </form>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <!----EDITING FORM ENDS-->
        </div>
    </div>
</div>
<!--password-->
<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
    <div class="col-md-12">
        <!------CONTROL TABS START------->
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-lock"></i>
                    <?php echo ('Change Password'); ?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------->
        <div class="tab-content">
            <!----EDITING FORM STARTS---->
            <div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
                    <?php
                    foreach ($edit_data as $row) :
                    ?>
                        <?php echo form_open('teacher/manage_profile/change_password', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Current password'); ?></label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name="password" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('New password'); ?></label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name="new_password" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Confirm new password'); ?></label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name="confirm_new_password" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo ('Update profile'); ?></button>
                            </div>
                        </div>
                        </form>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <!----EDITING FORM ENDS--->
        </div>
    </div>
</div>