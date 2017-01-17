<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mailing Lists User'), ['action' => 'edit', $mailingListsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mailing Lists User'), ['action' => 'delete', $mailingListsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailingListsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mailing Lists Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailing Lists User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mailingListsUsers view large-9 medium-8 columns content">
    <h3><?= h($mailingListsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Mailing List') ?></th>
            <td><?= $mailingListsUser->has('mailing_list') ? $this->Html->link($mailingListsUser->mailing_list->name, ['controller' => 'MailingLists', 'action' => 'view', $mailingListsUser->mailing_list->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $mailingListsUser->has('user') ? $this->Html->link($mailingListsUser->user->id, ['controller' => 'Users', 'action' => 'view', $mailingListsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mailingListsUser->id) ?></td>
        </tr>
    </table>
</div>
