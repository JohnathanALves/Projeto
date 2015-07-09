<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Aliquotum'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="aliquota index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('aliquotaid') ?></th>
            <th><?= $this->Paginator->sort('fk_bequer') ?></th>
            <th><?= $this->Paginator->sort('n_aliquota') ?></th>
            <th><?= $this->Paginator->sort('qtd_larvas') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($aliquota as $aliquotum): ?>
        <tr>
            <td><?= h($aliquotum->aliquotaid) ?></td>
            <td><?= h($aliquotum->fk_bequer) ?></td>
            <td><?= $this->Number->format($aliquotum->n_aliquota) ?></td>
            <td><?= $this->Number->format($aliquotum->qtd_larvas) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $aliquotum->aliquotaid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aliquotum->aliquotaid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aliquotum->aliquotaid], ['confirm' => __('Tem certeza que deseja apagar este registro?', $aliquotum->aliquotaid)]) ?>
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
