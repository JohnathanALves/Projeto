<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Subdivisao'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="subdivisao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('subdivisaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_liberacao') ?></th>
            <th><?= $this->Paginator->sort('fk_bairro') ?></th>
            <th><?= $this->Paginator->sort('data_liberacao') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('supervisor') ?></th>
            <th><?= $this->Paginator->sort('qtd_alvo_rd11') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($subdivisao as $subdivisao): ?>
        <tr>
            <td><?= h($subdivisao->subdivisaoid) ?></td>
            <td><?= h($subdivisao->fk_liberacao) ?></td>
            <td><?= h($subdivisao->fk_bairro) ?></td>
            <td><?= h($subdivisao->data_liberacao) ?></td>
            <td><?= h($subdivisao->nome) ?></td>
            <td><?= h($subdivisao->supervisor) ?></td>
            <td><?= $this->Number->format($subdivisao->qtd_alvo_rd11) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $subdivisao->subdivisaoid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subdivisao->subdivisaoid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subdivisao->subdivisaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $subdivisao->subdivisaoid)]) ?>
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
