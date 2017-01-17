<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mailingList->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mailingList->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mailingLists form large-9 medium-8 columns content">
    <?= $this->Form->create($mailingList) ?>
    <fieldset>
        <legend><?= __('Edit Mailing List') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('campaigns._ids', ['options' => $campaigns]);
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
