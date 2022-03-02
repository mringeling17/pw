<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChargeContract $chargeContract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Charge Contract'), ['action' => 'edit', $chargeContract->charge_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Charge Contract'), ['action' => 'delete', $chargeContract->charge_id], ['confirm' => __('Are you sure you want to delete # {0}?', $chargeContract->charge_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Charge Contract'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge Contract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chargeContract view large-9 medium-8 columns content">
    <h3><?= h($chargeContract->charge_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Charge') ?></th>
            <td><?= $chargeContract->has('charge') ? $this->Html->link($chargeContract->charge->name, ['controller' => 'Charges', 'action' => 'view', $chargeContract->charge->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contract') ?></th>
            <td><?= $chargeContract->has('contract') ? $this->Html->link($chargeContract->contract->id, ['controller' => 'Contracts', 'action' => 'view', $chargeContract->contract->id]) : '' ?></td>
        </tr>
    </table>
</div>
