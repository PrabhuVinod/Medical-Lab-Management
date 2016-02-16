<div class="ptests form">
<?php echo $this->Form->create('Ptest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ptest'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pid');
		echo $this->Form->input('tid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ptest.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Ptest.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ptests'), array('action' => 'index')); ?></li>
	</ul>
</div>
