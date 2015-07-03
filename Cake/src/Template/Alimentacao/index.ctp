<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Alimentacao'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="alimentacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('alimentacaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>
            <th><?= $this->Paginator->sort('dia') ?></th>
            <th><?= $this->Paginator->sort('variacao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alimentacao as $alimentacao): ?>
        <tr>
            <td><?= h($alimentacao->alimentacaoid) ?></td>
            <td><?= h($alimentacao->fk_lotebandejas) ?></td>
            <td><?= h($alimentacao->dia) ?></td>
            <td><?= $this->Number->format($alimentacao->variacao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $alimentacao->alimentacaoid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alimentacao->alimentacaoid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alimentacao->alimentacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $alimentacao->alimentacaoid)]) ?>
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
