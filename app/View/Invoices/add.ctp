<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Invoice'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
	</ul>
</div>
