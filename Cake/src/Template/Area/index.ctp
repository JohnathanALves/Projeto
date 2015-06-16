<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="area index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('fk_liberacao') ?></th>
            <th><?= $this->Paginator->sort('n_area') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('qtd_rd11_liberadas') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($area as $area): ?>
        <tr>
            <td><?= $this->Number->format($area->fk_liberacao) ?></td>
            <td><?= $this->Number->format($area->n_area) ?></td>
            <td><?= h($area->nome) ?></td>
            <td><?= $this->Number->format($area->qtd_rd11_liberadas) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $area->fk_liberacao]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $area->fk_liberacao]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $area->fk_liberacao], ['confirm' => __('Are you sure you want to delete # {0}?', $area->fk_liberacao)]) ?>
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
