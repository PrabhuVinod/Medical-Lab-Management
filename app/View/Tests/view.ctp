<div class="tests view">
<h2><?php echo __('Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($test['Test']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($test['Test']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($test['Test']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($test['Test']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hrs'); ?></dt>
		<dd>
			<?php echo h($test['Test']['hrs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sample'); ?></dt>
		<dd>
			<?php echo h($test['Test']['sample']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Samplequantity'); ?></dt>
		<dd>
			<?php echo h($test['Test']['samplequantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sampleunit'); ?></dt>
		<dd>
			<?php echo h($test['Test']['sampleunit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($test['Test']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Test'), array('action' => 'edit', $test['Test']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Test'), array('action' => 'delete', $test['Test']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $test['Test']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('action' => 'add')); ?> </li>
	</ul>
</div>
