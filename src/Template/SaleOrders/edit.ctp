<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SaleOrder $saleOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $saleOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $saleOrder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sale Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="saleOrders form large-9 medium-8 columns content">
    <?= $this->Form->create($saleOrder) ?>
    <fieldset>
        <legend><?= __('Edit Sale Order') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('amount');
            echo $this->Form->control('payed');
            echo $this->Form->control('due_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
