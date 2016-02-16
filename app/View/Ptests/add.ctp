<div class="ptests form">
<?php echo $this->Form->create('Ptest'); ?>
	<fieldset>
		<legend><?php echo __('Add Ptest'); ?></legend>
	<?php
		echo $this->Form->input('pid');
		echo $this->Form->input('tid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ptests'), array('action' => 'index')); ?></li>
	</ul>
</div>
