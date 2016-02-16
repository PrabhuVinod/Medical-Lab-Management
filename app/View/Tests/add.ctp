<div class="tests form">
<?php echo $this->Form->create('Test'); ?>
	<fieldset>
		<legend><?php echo __('Add Test'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('category');
		echo $this->Form->input('cost');
		echo $this->Form->input('hrs');
		echo $this->Form->input('sample');
		echo $this->Form->input('samplequantity');
		echo $this->Form->input('sampleunit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tests'), array('action' => 'index')); ?></li>
	</ul>
</div>
