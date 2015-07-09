<div class="actions large-10 medium-9 columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Costagem'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="costagem index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('costagemid') ?></th>
            <th><?= $this->Paginator->sort('fk_separacoes') ?></th>
            <th><?= $this->Paginator->sort('n_amostra') ?></th>
            <th><?= $this->Paginator->sort('qtd_macho') ?></th>
            <th><?= $this->Paginator->sort('qtd_femea') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel') ?></th>
            <th><?= $this->Paginator->sort('sexo') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($costagem as $costagem): ?>
        <tr>
            <td><?= h($costagem->costagemid) ?></td>
            <td><?= h($costagem->fk_separacoes) ?></td>
            <td><?= $this->Number->format($costagem->n_amostra) ?></td>
            <td><?= $this->Number->format($costagem->qtd_macho) ?></td>
            <td><?= $this->Number->format($costagem->qtd_femea) ?></td>
            <td><?= h($costagem->nome_responsavel) ?></td>
            <td><?= h($costagem->sexo) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $costagem->costagemid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $costagem->costagemid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $costagem->costagemid], ['confirm' => __('Are you sure you want to delete # {0}?', $costagem->costagemid)]) ?>
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
