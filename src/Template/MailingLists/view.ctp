<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mailing List'), ['action' => 'edit', $mailingList->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mailing List'), ['action' => 'delete', $mailingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailingList->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailing List'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mailingLists view large-9 medium-8 columns content">
    <h3><?= h($mailingList->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($mailingList->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mailingList->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mailingList->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mailingList->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Campaigns') ?></h4>
        <?php if (!empty($mailingList->campaigns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Template Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mailingList->campaigns as $campaigns): ?>
            <tr>
                <td><?= h($campaigns->id) ?></td>
                <td><?= h($campaigns->name) ?></td>
                <td><?= h($campaigns->created) ?></td>
                <td><?= h($campaigns->modified) ?></td>
                <td><?= h($campaigns->status) ?></td>
                <td><?= h($campaigns->template_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Campaigns', 'action' => 'view', $campaigns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Campaigns', 'action' => 'edit', $campaigns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Campaigns', 'action' => 'delete', $campaigns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaigns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($mailingList->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mailingList->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->locale) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
