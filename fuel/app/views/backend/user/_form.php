<!-- Form -->
<div class="row">
    <div class="col-xs-12">
        <form class="form-horizontal" role="form" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group <?php if(isset($error['username'])) echo 'has-error'; ?>">
                <label class="control-label col-sm-3" for="fullname">Username:</label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo Input::post('username', isset($user) ? $user->username : ''); ?>" placeholder="Enter UserName">
                    <?php if(isset($error['username'])) echo "<small class='help-block'>" . $error['username'] . "</small>"; ?>
                </div>
            </div>
            <div class="form-group <?php if(isset($error['password'])) echo 'has-error'; ?>">
                <label class="control-label col-sm-3" for="fullname">Password:</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo Input::post('password'); ?>" placeholder="Enter Password"> 
                    <?php if(isset($error['password'])) echo "<small class='help-block'>" . $error['password'] . "</small>"; ?>
                </div>
            </div>

            <div class="form-group <?php if(isset($error['email'])) echo 'has-error'; ?>">
                <label class="control-label col-sm-3" for="fullname">Email:</label>
                <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo Input::post('email', isset($user) ? $user->email : ''); ?>" placeholder="Enter Email">
                    <?php if(isset($error['email'])) echo "<small class='help-block'>" . $error['email'] . "</small>"; ?>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

