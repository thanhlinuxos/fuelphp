<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($project_entry) ? $project_entry->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Abstract', 'abstract', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('abstract', Input::post('abstract', isset($project_entry) ? $project_entry->abstract : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Abstract')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Full text', 'full_text', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('full_text', Input::post('full_text', isset($project_entry) ? $project_entry->full_text : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Full text')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Project id', 'project_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('project_id', Input::post('project_id', isset($project_entry) ? $project_entry->project_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Project id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is draft', 'is_draft', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_draft', Input::post('is_draft', isset($project_entry) ? $project_entry->is_draft : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is draft')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Order', 'order', array('class'=>'control-label')); ?>

				<?php echo Form::input('order', Input::post('order', isset($project_entry) ? $project_entry->order : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Order')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>