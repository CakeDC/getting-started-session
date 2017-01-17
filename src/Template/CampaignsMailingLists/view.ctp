<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campaigns Mailing List'), ['action' => 'edit', $campaignsMailingList->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campaigns Mailing List'), ['action' => 'delete', $campaignsMailingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsMailingList->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns Mailing Lists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaigns Mailing List'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="campaignsMailingLists view large-9 medium-8 columns content">
    <h3><?= h($campaignsMailingList->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Campaign') ?></th>
            <td><?= $campaignsMailingList->has('campaign') ? $this->Html->link($campaignsMailingList->campaign->name, ['controller' => 'Campaigns', 'action' => 'view', $campaignsMailingList->campaign->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mailing List') ?></th>
            <td><?= $campaignsMailingList->has('mailing_list') ? $this->Html->link($campaignsMailingList->mailing_list->name, ['controller' => 'MailingLists', 'action' => 'view', $campaignsMailingList->mailing_list->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($campaignsMailingList->id) ?></td>
        </tr>
    </table>
</div>
