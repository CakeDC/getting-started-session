<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logs index large-9 medium-8 columns content">
    <h3><?= __('Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campaign_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= $this->Number->format($log->id) ?></td>
                <td><?= $log->has('campaign') ? $this->Html->link($log->campaign->name, ['controller' => 'Campaigns', 'action' => 'view', $log->campaign->id]) : '' ?></td>
                <td><?= $log->has('user') ? $this->Html->link($log->user->id, ['controller' => 'Users', 'action' => 'view', $log->user->id]) : '' ?></td>
                <td><?= h($log->subject) ?></td>
                <td><?= h($log->body) ?></td>
                <td><?= h($log->reference) ?></td>
                <td><?= h($log->status) ?></td>
                <td><?= h($log->created) ?></td>
                <td><?= h($log->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $log->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $log->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $log->id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->id)]) ?>
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
