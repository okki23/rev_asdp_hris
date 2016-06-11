 
    <!-- Login wrapper -->
    <div class="login-wrapper">
        <form action="<?php echo base_url('login/auth');?>" role="form" method="POST">
            <div class="popup-header">
            
                <span class="text-semibold">User Login</span>
                 
            </div>
            <div class="well">
                <div class="form-group has-feedback">
                    <label>Username</label>
                    <input type="text" name = "username" class="form-control" placeholder="Username">
                    <i class="icon-users form-control-feedback"></i>
                </div>

                <div class="form-group has-feedback">
                    <label>Password</label>
                    <input type="password" name = "password" class="form-control" placeholder="Password">
                    <i class="icon-lock form-control-feedback"></i>
                </div>

                <div class="row form-actions">
                  
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-block btn-warning pull-right"><i class="icon-menu2"></i> Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>  
    <!-- /login wrapper -->