<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract $contract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contract'), ['action' => 'edit', $contract->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contract'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sale Orders'), ['controller' => 'SaleOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale Order'), ['controller' => 'SaleOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contracts view large-9 medium-8 columns content">
    <h3><?= h($contract->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $contract->has('client') ? $this->Html->link($contract->client->name, ['controller' => 'Clients', 'action' => 'view', $contract->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $contract->has('plan') ? $this->Html->link($contract->plan->name, ['controller' => 'Plans', 'action' => 'view', $contract->plan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($contract->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apartment') ?></th>
            <td><?= h($contract->apartment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comuna') ?></th>
            <td><?= h($contract->comuna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($contract->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contract->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($contract->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($contract->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extra Tvs') ?></th>
            <td><?= $this->Number->format($contract->extra_tvs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($contract->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beggining Date') ?></th>
            <td><?= h($contract->beggining_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($contract->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bill Date') ?></th>
            <td><?= h($contract->bill_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount End') ?></th>
            <td><?= h($contract->discount_end) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Charge Contract') ?></h4>
        <?php if (!empty($contract->charge_contract)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Charge Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contract->charge_contract as $chargeContract): ?>
            <tr>
                <td><?= h($chargeContract->charge_id) ?></td>
                <td><?= h($chargeContract->contract_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChargeContract', 'action' => 'view', $chargeContract->charge_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChargeContract', 'action' => 'edit', $chargeContract->charge_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChargeContract', 'action' => 'delete', $chargeContract->charge_id], ['confirm' => __('Are you sure you want to delete # {0}?', $chargeContract->charge_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sale Orders') ?></h4>
        <?php if (!empty($contract->sale_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Payed') ?></th>
                <th scope="col"><?= __('Due Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contract->sale_orders as $saleOrders): ?>
            <tr>
                <td><?= h($saleOrders->id) ?></td>
                <td><?= h($saleOrders->contract_id) ?></td>
                <td><?= h($saleOrders->date) ?></td>
                <td><?= h($saleOrders->amount) ?></td>
                <td><?= h($saleOrders->payed) ?></td>
                <td><?= h($saleOrders->due_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SaleOrders', 'action' => 'view', $saleOrders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SaleOrders', 'action' => 'edit', $saleOrders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SaleOrders', 'action' => 'delete', $saleOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleOrders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
