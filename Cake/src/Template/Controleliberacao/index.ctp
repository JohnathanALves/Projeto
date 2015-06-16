<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Controleliberacao'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="controleliberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('controleliberacaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_separacaoliberacao') ?></th>
            <th><?= $this->Paginator->sort('n_rd11_controle') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas_vivas_pre') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas_mortas_pre') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_vivos_pre') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_mortos_pre') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($controleliberacao as $controleliberacao): ?>
        <tr>
            <td><?= h($controleliberacao->controleliberacaoid) ?></td>
            <td><?= h($controleliberacao->fk_separacaoliberacao) ?></td>
            <td><?= $this->Number->format($controleliberacao->n_rd11_controle) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_pupas_vivas_pre) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_pupas_mortas_pre) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_adultos_vivos_pre) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_adultos_mortos_pre) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $controleliberacao->controleliberacaoid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $controleliberacao->controleliberacaoid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $controleliberacao->controleliberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $controleliberacao->controleliberacaoid)]) ?>
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
