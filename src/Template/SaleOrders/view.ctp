<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SaleOrder $saleOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sale Order'), ['action' => 'edit', $saleOrder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sale Order'), ['action' => 'delete', $saleOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sale Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="saleOrders view large-9 medium-8 columns content">
    <h3><?= h($saleOrder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contract') ?></th>
            <td><?= $saleOrder->has('contract') ? $this->Html->link($saleOrder->contract->id, ['controller' => 'Contracts', 'action' => 'view', $saleOrder->contract->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($saleOrder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($saleOrder->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payed') ?></th>
            <td><?= $this->Number->format($saleOrder->payed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($saleOrder->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Due Date') ?></th>
            <td><?= h($saleOrder->due_date) ?></td>
        </tr>
    </table>
</div>
