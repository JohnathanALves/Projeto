<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Controle'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="controle index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('controleid') ?></th>
            <th><?= $this->Paginator->sort('fk_separacoes') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupa_colher') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_bandejas_separ') ?></th>
            <th><?= $this->Paginator->sort('qtd_bandejas_controle') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_colheres_macho') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_colheres_femea') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($controle as $controle): ?>
        <tr>
            <td><?= h($controle->controleid) ?></td>
            <td><?= h($controle->fk_separacoes) ?></td>
            <td><?= $this->Number->format($controle->qtd_pupa_colher) ?></td>
            <td><?= $this->Number->format($controle->qtd_total_bandejas_separ) ?></td>
            <td><?= $this->Number->format($controle->qtd_bandejas_controle) ?></td>
            <td><?= $this->Number->format($controle->qtd_total_colheres_macho) ?></td>
            <td><?= $this->Number->format($controle->qtd_total_colheres_femea) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $controle->controleid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $controle->controleid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $controle->controleid], ['confirm' => __('Are you sure you want to delete # {0}?', $controle->controleid)]) ?>
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
