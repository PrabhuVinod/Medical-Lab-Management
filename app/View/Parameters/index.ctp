<div class="parameters index">
	<h2><?php echo __('Parameters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tid'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('defaultval'); ?></th>
			<th><?php echo $this->Paginator->sort('unit'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($parameters as $parameter): ?>
	<tr>
		<td><?php echo h($parameter['Parameter']['id']); ?>&nbsp;</td>
		<td><?php echo h($parameter['Parameter']['tid']); ?>&nbsp;</td>
		<td><?php echo h($parameter['Parameter']['name']); ?>&nbsp;</td>
		<td><?php echo h($parameter['Parameter']['defaultval']); ?>&nbsp;</td>
		<td><?php echo h($parameter['Parameter']['unit']); ?>&nbsp;</td>
		<td><?php echo h($parameter['Parameter']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $parameter['Parameter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $parameter['Parameter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $parameter['Parameter']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $parameter['Parameter']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Parameter'), array('action' => 'add')); ?></li>
	</ul>
</div>
