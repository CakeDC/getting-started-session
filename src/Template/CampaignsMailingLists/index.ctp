<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Campaigns Mailing List'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campaignsMailingLists index large-9 medium-8 columns content">
    <h3><?= __('Campaigns Mailing Lists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campaign_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mailing_list_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($campaignsMailingLists as $campaignsMailingList): ?>
            <tr>
                <td><?= $this->Number->format($campaignsMailingList->id) ?></td>
                <td><?= $campaignsMailingList->has('campaign') ? $this->Html->link($campaignsMailingList->campaign->name, ['controller' => 'Campaigns', 'action' => 'view', $campaignsMailingList->campaign->id]) : '' ?></td>
                <td><?= $campaignsMailingList->has('mailing_list') ? $this->Html->link($campaignsMailingList->mailing_list->name, ['controller' => 'MailingLists', 'action' => 'view', $campaignsMailingList->mailing_list->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $campaignsMailingList->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campaignsMailingList->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campaignsMailingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsMailingList->id)]) ?>
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
