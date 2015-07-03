<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Gaiola'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="gaiola index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('gaiolaid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotegaiolas') ?></th>
            <th><?= $this->Paginator->sort('fk_separacoes') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($gaiola as $gaiola): ?>
        <tr>
            <td><?= h($gaiola->gaiolaid) ?></td>
            <td><?= h($gaiola->fk_lotegaiolas) ?></td>
            <td><?= h($gaiola->fk_separacoes) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $gaiola->gaiolaid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gaiola->gaiolaid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gaiola->gaiolaid], ['confirm' => __('Are you sure you want to delete # {0}?', $gaiola->gaiolaid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
