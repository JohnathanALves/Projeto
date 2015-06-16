<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Bairro'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="bairro index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('bairroid') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('fase') ?></th>
            <th><?= $this->Paginator->sort('qtd_real_rd11') ?></th>
            <th><?= $this->Paginator->sort('liberacao_semana') ?></th>
            <th><?= $this->Paginator->sort('populacao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bairro as $bairro): ?>
        <tr>
            <td><?= h($bairro->bairroid) ?></td>
            <td><?= h($bairro->data) ?></td>
            <td><?= h($bairro->nome) ?></td>
            <td><?= h($bairro->fase) ?></td>
            <td><?= $this->Number->format($bairro->qtd_real_rd11) ?></td>
            <td><?= $this->Number->format($bairro->liberacao_semana) ?></td>
            <td><?= $this->Number->format($bairro->populacao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $bairro->bairroid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bairro->bairroid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bairro->bairroid], ['confirm' => __('Are you sure you want to delete # {0}?', $bairro->bairroid)]) ?>
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
