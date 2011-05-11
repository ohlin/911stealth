<div class="alerts form">
<?php echo $this->Form->create('Alert');?>
	<fieldset>
 		<legend><?php __('Edit Alert'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lat');
		echo $this->Form->input('lon');
		echo $this->Form->input('radius');
		echo $this->Form->input('can_call');
		echo $this->Form->input('battery_status');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alert.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Alert.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alerts'), array('action' => 'index'));?></li>
	</ul>
</div>