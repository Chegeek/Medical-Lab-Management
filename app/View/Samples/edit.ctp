<div class="samples form">
<?php echo $this->Form->create('Sample'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sample'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('quantity');
		echo $this->Form->input('unit');
		echo $this->Form->input('ptid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sample.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Sample.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Samples'), array('action' => 'index')); ?></li>
	</ul>
</div>
