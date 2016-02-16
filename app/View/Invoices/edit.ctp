<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pid');
		echo $this->Form->input('amount');
		echo $this->Form->input('advance');
		echo $this->Form->input('totalamount');
		echo $this->Form->input('balance');
		echo $this->Form->input('discount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Invoice.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Invoice.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
	</ul>
</div>
