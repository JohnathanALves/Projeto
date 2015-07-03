<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="lotetransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Lote Transporte ID') ?></th>
            <th><?= $this->Paginator->sort('Separação') ?></th>
            <th><?= $this->Paginator->sort('nº transporte') ?></th>
            <th><?= $this->Paginator->sort('qtd colheres célula') ?></th>
            <th><?= $this->Paginator->sort('Cor lote') ?></th>
            <th><?= $this->Paginator->sort('qtd c25 completas envio') ?></th>
            <th><?= $this->Paginator->sort('qtd c25 incompletas envio') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
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
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $lotetransporte->lotetransporteid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $lotetransporte->lotetransporteid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $lotetransporte->lotetransporteid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $lotetransporte->lotetransporteid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
