<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Charge $charge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Charge'), ['action' => 'edit', $charge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Charge'), ['action' => 'delete', $charge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $charge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Charges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge Contract'), ['controller' => 'ChargeContract', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="charges view large-9 medium-8 columns content">
    <h3><?= h($charge->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($charge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= $this->Number->format($charge->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($charge->value) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Charge Contract') ?></h4>
        <?php if (!empty($charge->charge_contract)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Charge Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($charge->charge_contract as $chargeContract): ?>
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
</div>
