<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tetraciclina'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="tetraciclina index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('tetraciclinaid') ?></th>
            <th><?= $this->Paginator->sort('fk_controle') ?></th>
            <th><?= $this->Paginator->sort('qtd_larvas') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_voando') ?></th>
            <th><?= $this->Paginator->sort('n_dias') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tetraciclina as $tetraciclina): ?>
        <tr>
            <td><?= h($tetraciclina->tetraciclinaid) ?></td>
            <td><?= h($tetraciclina->fk_controle) ?></td>
            <td><?= $this->Number->format($tetraciclina->qtd_larvas) ?></td>
            <td><?= $this->Number->format($tetraciclina->qtd_pupas) ?></td>
            <td><?= $this->Number->format($tetraciclina->qtd_adultos) ?></td>
            <td><?= $this->Number->format($tetraciclina->qtd_adultos_voando) ?></td>
            <td><?= $this->Number->format($tetraciclina->n_dias) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tetraciclina->tetraciclinaid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tetraciclina->tetraciclinaid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tetraciclina->tetraciclinaid], ['confirm' => __('Are you sure you want to delete # {0}?', $tetraciclina->tetraciclinaid)]) ?>
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
