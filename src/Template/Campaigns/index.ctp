<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Templates'), ['controller' => 'Templates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Template'), ['controller' => 'Templates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Logs'), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campaigns index large-9 medium-8 columns content">
    <h3><?= __('Campaigns') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('template_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($campaigns as $campaign): ?>
            <tr>
                <td><?= $this->Number->format($campaign->id) ?></td>
                <td><?= h($campaign->name) ?></td>
                <td><?= h($campaign->created) ?></td>
                <td><?= h($campaign->modified) ?></td>
                <td><?= h($campaign->status) ?></td>
                <td><?= $campaign->has('template') ? $this->Html->link($campaign->template->name, ['controller' => 'Templates', 'action' => 'view', $campaign->template->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $campaign->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campaign->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campaign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->id)]) ?>
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
