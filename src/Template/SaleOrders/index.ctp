<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SaleOrder[]|\Cake\Collection\CollectionInterface $saleOrders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sale Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="saleOrders index large-9 medium-8 columns content">
    <h3><?= __('Sale Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contract_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('due_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($saleOrders as $saleOrder): ?>
            <tr>
                <td><?= $this->Number->format($saleOrder->id) ?></td>
                <td><?= $saleOrder->has('contract') ? $this->Html->link($saleOrder->contract->id, ['controller' => 'Contracts', 'action' => 'view', $saleOrder->contract->id]) : '' ?></td>
                <td><?= h($saleOrder->date) ?></td>
                <td><?= $this->Number->format($saleOrder->amount) ?></td>
                <td><?= $this->Number->format($saleOrder->payed) ?></td>
                <td><?= h($saleOrder->due_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $saleOrder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $saleOrder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saleOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleOrder->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
