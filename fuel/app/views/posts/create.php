<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "action1" ); ?>'><?php echo Html::anchor('posts/action1','Action1');?></li>
	<li class='<?php echo Arr::get($subnav, "action2" ); ?>'><?php echo Html::anchor('posts/action2','Action2');?></li>
	<li class='<?php echo Arr::get($subnav, "action3" ); ?>'><?php echo Html::anchor('posts/action3','Action3');?></li>

</ul>
<p>Action3</p>