<div class="campaigns index large-9 medium-8 columns content">
    <h3><?= __('New Campaigns') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($campaigns as $campaign): ?>
            <tr>
                <td><?= h($campaign->name) ?></td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Send'), ['action' => 'send', $campaign->id], ['confirm' => __('Are you sure you want to send campaign {0}?', $campaign->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>