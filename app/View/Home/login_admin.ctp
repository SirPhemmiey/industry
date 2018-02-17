
<!-- Advanced login -->
<form action="<?php echo $this->webroot;?>admin/index" method="post">
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Please login</h5>
        </div>

    <div class="form-group has-feedback has-feedback-left">
        <input type="text" class="form-control" placeholder="Username" id="username">
        <div class="form-control-feedback">
            <i class="icon-user text-muted"></i>
        </div>
        <span style="display:none; color:red;" id="usernameError">Username cannot be empty.</span>
    </div>

    <div class="form-group has-feedback has-feedback-left">
        <input type="text" class="form-control" placeholder="Password" id="password">
        <div class="form-control-feedback">
            <i class="icon-lock2 text-muted"></i>
        </div>
        <span style="display:none; color:red;" id="passwordError">Password cannot be empty.</span>
    </div>

        <div class="form-group login-options">
            <div class="row">
                <div class="col-sm-6">
                    <label class="checkbox-inline">
                        <input type="checkbox" class="styled" checked="checked">
                        Remember me
                    </label>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="<?php echo $this->webroot;?>">Forgot password?</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" id="login" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
        </div>
    </div>
</form>
<!-- /advanced login -->
<script>
    $("#login").on('click', function(event){
        var username = $("#username").val();
    var password = $("#password").val();
    if(username == '' || password == ''){
        alert("Fields cannot be empty");
        event.preventDefault();
    }
    });
</script>
