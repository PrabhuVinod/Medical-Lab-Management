<div class="patients form">
<?php echo $this->Form->create('Patient'); ?>
	<fieldset>
		<legend><?php echo __('Edit Patient'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('age');
		echo $this->Form->input('gender');
		echo $this->Form->input('address');
		echo $this->Form->input('refdoc');
		echo $this->Form->input('phone');
		echo $this->Form->input('testdate');
		echo $this->Form->input('resultdate');
		echo $this->Form->input('advance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Patient.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Patient.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?></li>
	</ul>
</div>
