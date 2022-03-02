<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract[]|\Cake\Collection\CollectionInterface $contracts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?></li>
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
<div class="contracts index large-9 medium-8 columns content">
    <h3><?= __('Contracts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('beggining_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bill_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extra_tvs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apartment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comuna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contracts as $contract): ?>
            <tr>
                <td><?= $this->Number->format($contract->id) ?></td>
                <td><?= $contract->has('client') ? $this->Html->link($contract->client->name, ['controller' => 'Clients', 'action' => 'view', $contract->client->id]) : '' ?></td>
                <td><?= $contract->has('plan') ? $this->Html->link($contract->plan->name, ['controller' => 'Plans', 'action' => 'view', $contract->plan->id]) : '' ?></td>
                <td><?= h($contract->beggining_date) ?></td>
                <td><?= h($contract->end_date) ?></td>
                <td><?= h($contract->bill_date) ?></td>
                <td><?= $this->Number->format($contract->status) ?></td>
                <td><?= $this->Number->format($contract->discount) ?></td>
                <td><?= h($contract->discount_end) ?></td>
                <td><?= $this->Number->format($contract->extra_tvs) ?></td>
                <td><?= h($contract->street) ?></td>
                <td><?= $this->Number->format($contract->number) ?></td>
                <td><?= h($contract->apartment) ?></td>
                <td><?= h($contract->comuna) ?></td>
                <td><?= h($contract->region) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contract->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contract->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?>
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
