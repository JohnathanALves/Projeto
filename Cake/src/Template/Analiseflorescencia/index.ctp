<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Analiseflorescencium'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="analiseflorescencia index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('analiseflorescenciaid') ?></th>
            <th><?= $this->Paginator->sort('fk_controle') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_larvas') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_larvas_florescentes') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($analiseflorescencia as $analiseflorescencium): ?>
        <tr>
            <td><?= h($analiseflorescencium->analiseflorescenciaid) ?></td>
            <td><?= h($analiseflorescencium->fk_controle) ?></td>
            <td><?= h($analiseflorescencium->data) ?></td>
            <td><?= $this->Number->format($analiseflorescencium->qtd_total_larvas) ?></td>
            <td><?= $this->Number->format($analiseflorescencium->qtd_total_larvas_florescentes) ?></td>
            <td><?= h($analiseflorescencium->nome_responsavel) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $analiseflorescencium->analiseflorescenciaid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $analiseflorescencium->analiseflorescenciaid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $analiseflorescencium->analiseflorescenciaid], ['confirm' => __('Are you sure you want to delete # {0}?', $analiseflorescencium->analiseflorescenciaid)]) ?>
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
