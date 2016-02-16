<div class="tests index">
	<h2><?php echo __('Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('hrs'); ?></th>
			<th><?php echo $this->Paginator->sort('sample'); ?></th>
			<th><?php echo $this->Paginator->sort('samplequantity'); ?></th>
			<th><?php echo $this->Paginator->sort('sampleunit'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tests as $test): ?>
	<tr>
		<td><?php echo h($test['Test']['id']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['name']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['category']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['cost']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['hrs']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['sample']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['samplequantity']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['sampleunit']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $test['Test']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $test['Test']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $test['Test']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $test['Test']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Test'), array('action' => 'add')); ?></li>
	</ul>
</div>
