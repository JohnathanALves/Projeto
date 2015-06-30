<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Controletransporte'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="controletransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('controletransporteid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>
            <th><?= $this->Paginator->sort('situação_dia1') ?></th>
            <th><?= $this->Paginator->sort('situação_dia2') ?></th>
            <th><?= $this->Paginator->sort('situação_dia3') ?></th>
            <th><?= $this->Paginator->sort('comentario') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($controletransporte as $controletransporte): ?>
        <tr>
            <td><?= h($controletransporte->controletransporteid) ?></td>
            <td><?= h($controletransporte->fk_lotetransporte) ?></td>
            <td><?= h($controletransporte->situação_dia1) ?></td>
            <td><?= h($controletransporte->situação_dia2) ?></td>
            <td><?= h($controletransporte->situação_dia3) ?></td>
            <td><?= h($controletransporte->comentario) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $controletransporte->controletransporteid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $controletransporte->controletransporteid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $controletransporte->controletransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $controletransporte->controletransporteid)]) ?>
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
