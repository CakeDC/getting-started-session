<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $log->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $log->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logs form large-9 medium-8 columns content">
    <?= $this->Form->create($log) ?>
    <fieldset>
        <legend><?= __('Edit Log') ?></legend>
        <?php
            echo $this->Form->input('campaign_id', ['options' => $campaigns]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('subject');
            echo $this->Form->input('body');
            echo $this->Form->input('reference');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
