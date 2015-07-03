<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Amostrarepasse'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="amostrarepasse index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('amostrarepasseid') ?></th>
            <th><?= $this->Paginator->sort('fk_controle') ?></th>
            <th><?= $this->Paginator->sort('n_amostra') ?></th>
            <th><?= $this->Paginator->sort('qtd_machos') ?></th>
            <th><?= $this->Paginator->sort('qtd_femeas') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($amostrarepasse as $amostrarepasse): ?>
        <tr>
            <td><?= h($amostrarepasse->amostrarepasseid) ?></td>
            <td><?= h($amostrarepasse->fk_controle) ?></td>
            <td><?= $this->Number->format($amostrarepasse->n_amostra) ?></td>
            <td><?= $this->Number->format($amostrarepasse->qtd_machos) ?></td>
            <td><?= $this->Number->format($amostrarepasse->qtd_femeas) ?></td>
            <td><?= h($amostrarepasse->nome_responsavel) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $amostrarepasse->amostrarepasseid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $amostrarepasse->amostrarepasseid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $amostrarepasse->amostrarepasseid], ['confirm' => __('Are you sure you want to delete # {0}?', $amostrarepasse->amostrarepasseid)]) ?>
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
