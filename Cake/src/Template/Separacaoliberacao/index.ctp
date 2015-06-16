<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Separacaoliberacao'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="separacaoliberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('separacaoliberacaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_liberacao') ?></th>
            <th><?= $this->Paginator->sort('n_separacao') ?></th>
            <th><?= $this->Paginator->sort('data_drenagem_pre') ?></th>
            <th><?= $this->Paginator->sort('data_controle_liberacao_pos') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($separacaoliberacao as $separacaoliberacao): ?>
        <tr>
            <td><?= h($separacaoliberacao->separacaoliberacaoid) ?></td>
            <td><?= h($separacaoliberacao->fk_liberacao) ?></td>
            <td><?= $this->Number->format($separacaoliberacao->n_separacao) ?></td>
            <td><?= h($separacaoliberacao->data_drenagem_pre) ?></td>
            <td><?= h($separacaoliberacao->data_controle_liberacao_pos) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $separacaoliberacao->separacaoliberacaoid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $separacaoliberacao->separacaoliberacaoid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $separacaoliberacao->separacaoliberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $separacaoliberacao->separacaoliberacaoid)]) ?>
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
