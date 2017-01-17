<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campaignsMailingList->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsMailingList->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Campaigns Mailing Lists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mailing Lists'), ['controller' => 'MailingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mailing List'), ['controller' => 'MailingLists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campaignsMailingLists form large-9 medium-8 columns content">
    <?= $this->Form->create($campaignsMailingList) ?>
    <fieldset>
        <legend><?= __('Edit Campaigns Mailing List') ?></legend>
        <?php
            echo $this->Form->input('campaign_id', ['options' => $campaigns]);
            echo $this->Form->input('mailing_list_id', ['options' => $mailingLists]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
