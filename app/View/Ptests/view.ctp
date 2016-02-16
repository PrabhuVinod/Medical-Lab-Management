<div class="ptests view">
<h2><?php echo __('Ptest'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ptest['Ptest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($ptest['Ptest']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tid'); ?></dt>
		<dd>
			<?php echo h($ptest['Ptest']['tid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ptest['Ptest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ptest['Ptest']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ptest'), array('action' => 'edit', $ptest['Ptest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ptest'), array('action' => 'delete', $ptest['Ptest']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ptest['Ptest']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ptests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ptest'), array('action' => 'add')); ?> </li>
	</ul>
</div>
