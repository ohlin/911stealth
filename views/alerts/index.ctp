<div class="alerts index">
	<h2><?php echo __('Alerts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('lat');?></th>
			<th><?php echo $this->Paginator->sort('lon');?></th>
			<th><?php echo $this->Paginator->sort('radius');?></th>
			<th><?php echo $this->Paginator->sort('can_call');?></th>
			<th><?php echo $this->Paginator->sort('battery_status');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($alerts as $alert):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($alert['Alert']['id']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['lat']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['lon']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['radius']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['can_call']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['battery_status']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['message']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['created']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alert['Alert']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alert['Alert']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alert['Alert']['id']), null, __('Are you sure you want to delete # %s?', $alert['Alert']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Alert'), array('action' => 'add')); ?></li>
	</ul>
</div>