<!-- Form -->
<div class="row">
    <div class="col-xs-12">
        <form id="user-form" class="form-horizontal" role="form" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-3" for="fullname">Username:</label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo Input::post('username', isset($user) ? $user->username : ''); ?>" placeholder="Enter UserName">
                    <small class='help-block form_error'></small>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="fullname">Password:</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo Input::post('password'); ?>" placeholder="Enter Password"> 
                    <small class='help-block form_error'></small>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="fullname">Email:</label>
                <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo Input::post('email', isset($user) ? $user->email : ''); ?>" placeholder="Enter Email">
                    <small class='help-block form_error'></small>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-3" for="image">Image:</label>
                <div class="col-sm-9">
                    <input type="file" id="file_upload" name="image" value="chose image" />
                    <small class='help-block form_error'></small>
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

