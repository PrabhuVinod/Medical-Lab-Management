<div class="samples view">
<h2><?php echo __('Sample'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ptid'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['ptid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sample'), array('action' => 'edit', $sample['Sample']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sample'), array('action' => 'delete', $sample['Sample']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sample['Sample']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Samples'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sample'), array('action' => 'add')); ?> </li>
	</ul>
</div>
