<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mailingListsUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mailingListsUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mailing Lists Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mailingListsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($mailingListsUser) ?>
    <fieldset>
        <legend><?= __('Edit Mailing Lists User') ?></legend>
        <?php
            echo $this->Form->input('mailing_list_id', ['options' => $mailingLists]);
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
