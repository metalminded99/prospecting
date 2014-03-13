<div class="dialog">
    <div class="block">
        <p class="block-heading">Sign In</p>
        <div class="block-body">
            <form method="post" name="member_login_frm" id="member_login_frm">
                <div id="msg" class="alert alert-error" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Notice:</strong>&nbsp;<div id="msg-alert" style="display: inline-block;"></div>
                </div>
                <label>Email</label>
                <input type="text" id="email" class="span12 validate[required]" style="width:96%">
                <label>Password</label>
                <input type="password" id="password" class="span12 validate[required]" style="width:96%">
                <div id="buttons">
                    <a href="<?php echo base_url();?>dashboard" id="member_submit_btn" class="btn btn-primary pull-right">Sign In</a>
                </div>
                <div id="loading" class="pull-right" style="display:none;">
                    Signing in <img src="<?php echo base_url();?>assets/images/login-loader.gif" >
                </div>
                <label class="remember-me"><input type="checkbox"> Remember me</label>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>