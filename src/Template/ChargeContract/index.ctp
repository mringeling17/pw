<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChargeContract[]|\Cake\Collection\CollectionInterface $chargeContract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Charge Contract'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chargeContract index large-9 medium-8 columns content">
    <h3><?= __('Charge Contract') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('charge_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contract_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chargeContract as $chargeContract): ?>
            <tr>
                <td><?= $chargeContract->has('charge') ? $this->Html->link($chargeContract->charge->name, ['controller' => 'Charges', 'action' => 'view', $chargeContract->charge->id]) : '' ?></td>
                <td><?= $chargeContract->has('contract') ? $this->Html->link($chargeContract->contract->id, ['controller' => 'Contracts', 'action' => 'view', $chargeContract->contract->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chargeContract->charge_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chargeContract->charge_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chargeContract->charge_id], ['confirm' => __('Are you sure you want to delete # {0}?', $chargeContract->charge_id)]) ?>
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
