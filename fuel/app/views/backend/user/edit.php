<div class="page-title">
    <div class="row">
        <div class="col-xs-12"><h4>Edit User</h4></div>
    </div>
</div>
<?php echo render('backend/user/_form', array('error' => $error))?>
<p><?php echo Html::anchor('acp/user', 'Back'); ?></p>