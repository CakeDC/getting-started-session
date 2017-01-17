<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campaign->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Templates'), ['controller' => 'Templates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Template'), ['controller' => 'Templates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Logs'), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campaigns form large-9 medium-8 columns content">
    <?= $this->Form->create($campaign) ?>
    <fieldset>
        <legend><?= __('Edit Campaign') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('status');
            echo $this->Form->input('template_id', ['options' => $templates]);
            echo $this->Form->input('mailing_lists._ids', ['options' => $mailingLists]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
