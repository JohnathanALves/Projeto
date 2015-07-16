<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ovo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="ovos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ovosid') ?></th>
            <th><?= $this->Paginator->sort('fk_bequer') ?></th>
            <th><?= $this->Paginator->sort('data_origem_dos_ovos') ?></th>
            <th><?= $this->Paginator->sort('gramas_ovos_utilizados') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ovos as $ovo): ?>
        <tr>
            <td><?= h($ovo->ovosid) ?></td>
            <td><?= h($ovo->fk_bequer) ?></td>
            <td><?= h($ovo->data_origem_dos_ovos) ?></td>
            <td><?= $this->Number->format($ovo->gramas_ovos_utilizados) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ovo->ovosid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ovo->ovosid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ovo->ovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $ovo->ovosid)]) ?>
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
