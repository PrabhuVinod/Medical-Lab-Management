<div class="parameters form">
<?php echo $this->Form->create('Parameter'); ?>
	<fieldset>
		<legend><?php echo __('Add Parameter'); ?></legend>
	<?php
		echo $this->Form->input('tid');
		echo $this->Form->input('name');
		echo $this->Form->input('defaultval');
		echo $this->Form->input('unit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Parameters'), array('action' => 'index')); ?></li>
	</ul>
</div>
