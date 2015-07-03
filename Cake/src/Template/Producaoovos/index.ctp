<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Producaoovo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="producaoovos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('producaoovosid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotegaiolas') ?></th>
            <th><?= $this->Paginator->sort('qtd_gaiolas') ?></th>
            <th><?= $this->Paginator->sort('data_alimentacao_sangue') ?></th>
            <th><?= $this->Paginator->sort('data_coleta') ?></th>
            <th><?= $this->Paginator->sort('peso_ovos') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($producaoovos as $producaoovo): ?>
        <tr>
            <td><?= h($producaoovo->producaoovosid) ?></td>
            <td><?= h($producaoovo->fk_lotegaiolas) ?></td>
            <td><?= $this->Number->format($producaoovo->qtd_gaiolas) ?></td>
            <td><?= h($producaoovo->data_alimentacao_sangue) ?></td>
            <td><?= h($producaoovo->data_coleta) ?></td>
            <td><?= $this->Number->format($producaoovo->peso_ovos) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $producaoovo->producaoovosid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producaoovo->producaoovosid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producaoovo->producaoovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $producaoovo->producaoovosid)]) ?>
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
