<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campaign'), ['action' => 'edit', $campaign->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campaign'), ['action' => 'delete', $campaign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Templates'), ['controller' => 'Templates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Template'), ['controller' => 'Templates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Logs'), ['controller' => 'Logs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Logs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="campaigns view large-9 medium-8 columns content">
    <h3><?= h($campaign->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($campaign->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($campaign->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Template') ?></th>
            <td><?= $campaign->has('template') ? $this->Html->link($campaign->template->name, ['controller' => 'Templates', 'action' => 'view', $campaign->template->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($campaign->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($campaign->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($campaign->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Logs') ?></h4>
        <?php if (!empty($campaign->logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Campaign Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Subject') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Reference') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($campaign->logs as $logs): ?>
            <tr>
                <td><?= h($logs->id) ?></td>
                <td><?= h($logs->campaign_id) ?></td>
                <td><?= h($logs->user_id) ?></td>
                <td><?= h($logs->subject) ?></td>
                <td><?= h($logs->body) ?></td>
                <td><?= h($logs->reference) ?></td>
                <td><?= h($logs->status) ?></td>
                <td><?= h($logs->created) ?></td>
                <td><?= h($logs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Logs', 'action' => 'view', $logs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Logs', 'action' => 'edit', $logs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Logs', 'action' => 'delete', $logs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Mailing Lists') ?></h4>
        <?php if (!empty($campaign->mailing_lists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($campaign->mailing_lists as $mailingLists): ?>
            <tr>
                <td><?= h($mailingLists->id) ?></td>
                <td><?= h($mailingLists->name) ?></td>
                <td><?= h($mailingLists->created) ?></td>
                <td><?= h($mailingLists->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MailingLists', 'action' => 'view', $mailingLists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MailingLists', 'action' => 'edit', $mailingLists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MailingLists', 'action' => 'delete', $mailingLists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailingLists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
