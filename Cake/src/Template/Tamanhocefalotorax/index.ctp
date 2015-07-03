<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tamanhocefalotorax'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="tamanhocefalotorax index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('tamanhocefalotoraxid') ?></th>
            <th><?= $this->Paginator->sort('fk_controle') ?></th>
            <th><?= $this->Paginator->sort('n_replicata') ?></th>
            <th><?= $this->Paginator->sort('macho') ?></th>
            <th><?= $this->Paginator->sort('femea') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tamanhocefalotorax as $tamanhocefalotorax): ?>
        <tr>
            <td><?= h($tamanhocefalotorax->tamanhocefalotoraxid) ?></td>
            <td><?= h($tamanhocefalotorax->fk_controle) ?></td>
            <td><?= $this->Number->format($tamanhocefalotorax->n_replicata) ?></td>
            <td><?= $this->Number->format($tamanhocefalotorax->macho) ?></td>
            <td><?= $this->Number->format($tamanhocefalotorax->femea) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tamanhocefalotorax->tamanhocefalotoraxid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tamanhocefalotorax->tamanhocefalotoraxid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tamanhocefalotorax->tamanhocefalotoraxid], ['confirm' => __('Are you sure you want to delete # {0}?', $tamanhocefalotorax->tamanhocefalotoraxid)]) ?>
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
