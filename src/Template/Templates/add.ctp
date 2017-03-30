<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Templates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="templates form large-9 medium-8 columns content">
    <?= $this->Form->create($template) ?>
    <fieldset>
        <legend><?= __('Add Template') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('subject');
            echo $this->Form->control('body');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
