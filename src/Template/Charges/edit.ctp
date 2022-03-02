<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Charge $charge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $charge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $charge->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="charges form large-9 medium-8 columns content">
    <?= $this->Form->create($charge) ?>
    <fieldset>
        <legend><?= __('Edit Charge') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
