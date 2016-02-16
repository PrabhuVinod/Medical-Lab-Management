<div class="parameters form">
<?php echo $this->Form->create('Parameter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parameter'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Parameter.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Parameter.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('action' => 'index')); ?></li>
	</ul>
</div>
