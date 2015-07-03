<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Lotetransporte'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="lotetransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('lotetransporteid') ?></th>
            <th><?= $this->Paginator->sort('fk_separacao') ?></th>
            <th><?= $this->Paginator->sort('n_transporte') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_celula') ?></th>
            <th><?= $this->Paginator->sort('cor_lote') ?></th>
            <th><?= $this->Paginator->sort('qtd_c25_completas_envio') ?></th>
            <th><?= $this->Paginator->sort('qtd_c25_incompletas_envio') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($lotetransporte as $lotetransporte): ?>
        <tr>
            <td><?= h($lotetransporte->lotetransporteid) ?></td>
            <td><?= h($lotetransporte->fk_separacao) ?></td>
            <td><?= $this->Number->format($lotetransporte->n_transporte) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_colheres_celula) ?></td>
            <td><?= h($lotetransporte->cor_lote) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_c25_completas_envio) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_c25_incompletas_envio) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $lotetransporte->lotetransporteid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lotetransporte->lotetransporteid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lotetransporte->lotetransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotetransporte->lotetransporteid)]) ?>
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
