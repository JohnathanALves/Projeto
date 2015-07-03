<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Lotebandeja'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="lotebandejas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('lotebandejasid') ?></th>
            <th><?= $this->Paginator->sort('n_lote') ?></th>
            <th><?= $this->Paginator->sort('qtd_bdj_desc_antes_separacao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($lotebandejas as $lotebandeja): ?>
        <tr>
            <td><?= h($lotebandeja->lotebandejasid) ?></td>
            <td><?= $this->Number->format($lotebandeja->n_lote) ?></td>
            <td><?= $this->Number->format($lotebandeja->qtd_bdj_desc_antes_separacao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $lotebandeja->lotebandejasid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lotebandeja->lotebandejasid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lotebandeja->lotebandejasid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotebandeja->lotebandejasid)]) ?>
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
