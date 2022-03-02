<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract $contract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contract->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sale Orders'), ['controller' => 'SaleOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sale Order'), ['controller' => 'SaleOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contracts form large-9 medium-8 columns content">
    <?= $this->Form->create($contract) ?>
    <fieldset>
        <legend><?= __('Edit Contract') ?></legend>
        <?php
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('plan_id', ['options' => $plans]);
            echo $this->Form->control('beggining_date');
            echo $this->Form->control('end_date');
            echo $this->Form->control('bill_date');
            echo $this->Form->control('status');
            echo $this->Form->control('discount');
            echo $this->Form->control('discount_end', ['empty' => true]);
            echo $this->Form->control('extra_tvs');
            echo $this->Form->control('street');
            echo $this->Form->control('number');
            echo $this->Form->control('apartment');
            echo $this->Form->control('comuna');
            echo $this->Form->control('region');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
