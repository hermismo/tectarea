<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong><h4>Iniciar Sesión - Por Favor Ingrese Sus Datos</h4></strong>
                </div>
                <div class="col-md-12" style="margin-top:10px">
                    <div class="col-md-6">
                        <?php echo form_open("auth/login");?>
                            <p>
                              <?php echo lang('login_identity_label', 'identity');?>
                              <?php echo form_input($identity);?>
                            </p>

                            <p>
                              <?php echo lang('login_password_label', 'password');?>
                              <?php echo form_input($password);?>
                            </p>

                            <p>
                              <?php echo lang('login_remember_label', 'remember');?>
                              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                            </p>


                            <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

                          <?php echo form_close();?>
                          <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                          <div id="infoMessage" class="text-danger alert-danger"><?php echo $message;?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
    <h1><?php //echo lang('login_heading');?></h1>
    <p><?php //echo lang('login_subheading');?></p>

    <div id="infoMessage"><?php echo $message;?></div>

    <?php //echo form_open("auth/login");?>

      <p>
        <?php //echo lang('login_identity_label', 'identity');?>
        <?php //echo form_input($identity);?>
      </p>

      <p>
        <?php //echo lang('login_password_label', 'password');?>
        <?php //echo form_input($password);?>
      </p>

      <p>
        <?php //echo lang('login_remember_label', 'remember');?>
        <?php //echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      </p>


      <p><?php //echo form_submit('submit', lang('login_submit_btn'));?></p>

    <?php //echo form_close();?>

    <p><a href="forgot_password"><?php //echo lang('login_forgot_password');?></a></p>
</div>
-->