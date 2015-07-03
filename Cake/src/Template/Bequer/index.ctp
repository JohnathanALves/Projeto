<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Bequer'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="bequer index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('bequerid') ?></th>
            <th><?= $this->Paginator->sort('n_bequer') ?></th>
            <th><?= $this->Paginator->sort('volume') ?></th>
            <th><?= $this->Paginator->sort('data_fim_eclosao') ?></th>
            <th><?= $this->Paginator->sort('data_inicio_eclosao') ?></th>
            <th><?= $this->Paginator->sort('contagem_amostra') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bequer as $bequer): ?>
        <tr>
            <td><?= h($bequer->bequerid) ?></td>
            <td><?= $this->Number->format($bequer->n_bequer) ?></td>
            <td><?= $this->Number->format($bequer->volume) ?></td>
            <td><?= h($bequer->data_fim_eclosao) ?></td>
            <td><?= h($bequer->data_inicio_eclosao) ?></td>
            <td><?= $this->Number->format($bequer->contagem_amostra) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $bequer->bequerid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bequer->bequerid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bequer->bequerid], ['confirm' => __('Are you sure you want to delete # {0}?', $bequer->bequerid)]) ?>
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
