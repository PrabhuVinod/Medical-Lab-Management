<div class="patients view">
<h2><?php echo __('Patient'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Refdoc'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['refdoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Testdate'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['testdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultdate'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['resultdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Advance'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['advance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patient'), array('action' => 'edit', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patient'), array('action' => 'delete', $patient['Patient']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $patient['Patient']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?> </li>
	</ul>
</div>
