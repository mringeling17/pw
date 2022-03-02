<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChargeContract $chargeContract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chargeContract->charge_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chargeContract->charge_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Charge Contract'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chargeContract form large-9 medium-8 columns content">
    <?= $this->Form->create($chargeContract) ?>
    <fieldset>
        <legend><?= __('Edit Charge Contract') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
