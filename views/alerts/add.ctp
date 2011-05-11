<div class="alerts form">
<div id="indicator" style="display:none;">Stuff is happening!</div>
<?php echo $this->Form->create('Alert');?>
	<fieldset>
 		<legend><?php __('Add Alert'); ?></legend>
	<?php
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('lat', array('type' => 'hidden'));
		echo $this->Form->input('lon', array('type' => 'hidden'));
		echo $this->Form->input('radius', array('type' => 'hidden'));
		echo $this->Form->input('can_call', array('label' => 'Can you talk?'));
		echo $this->Form->input('battery_status', array('type' => 'select', 'options' => array('25%', '50%', '75%', '100%')));
		echo $this->Form->input('message', array('label' => 'Describe your emergency'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alerts'), array('action' => 'index'));?></li>
	</ul>
</div>
