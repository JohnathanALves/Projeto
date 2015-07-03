<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Separaco'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="separacoes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('separacoesid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>
            <th><?= $this->Paginator->sort('data_separacao') ?></th>
            <th><?= $this->Paginator->sort('n_separacao') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_macho') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_femea') ?></th>
            <th><?= $this->Paginator->sort('qtd_bdj_descart_ap_separ') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($separacoes as $separaco): ?>
        <tr>
            <td><?= h($separaco->separacoesid) ?></td>
            <td><?= h($separaco->fk_lotebandejas) ?></td>
            <td><?= h($separaco->data_separacao) ?></td>
            <td><?= $this->Number->format($separaco->n_separacao) ?></td>
            <td><?= $this->Number->format($separaco->qtd_colheres_macho) ?></td>
            <td><?= $this->Number->format($separaco->qtd_colheres_femea) ?></td>
            <td><?= $this->Number->format($separaco->qtd_bdj_descart_ap_separ) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $separaco->separacoesid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $separaco->separacoesid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $separaco->separacoesid], ['confirm' => __('Are you sure you want to delete # {0}?', $separaco->separacoesid)]) ?>
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
