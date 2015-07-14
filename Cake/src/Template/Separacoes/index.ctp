<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="separacoes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
           <!--  <th><?= $this->Paginator->sort('separacoesid', 'Separações ID') ?></th>
            <th><?= $this->Paginator->sort('fk_lotebandejas', 'Lote bandejas') ?></th> -->
            <th><?= $this->Paginator->sort('data_separacao', 'Data') ?></th>
            <th><?= $this->Paginator->sort('hora_finalizacao', 'Horário de finalização') ?></th>
            <th><?= $this->Paginator->sort('n_separacao', 'Nº separação') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_macho', 'Qtd colheres macho') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_femea', 'Qtd colheres femea') ?></th>
            <th><?= $this->Paginator->sort('qtd_bdj_descart_ap_separ', 'Qtd Bandejas descartadas ao Separar') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($separacoes as $separaco): ?>
        <tr>
          <!--   <td><?= h($separaco->separacoesid) ?></td> linkando com costagem
            <td><?= h($separaco->fk_lotebandejas) ?></td> -->
            <td><?= h(strstr($separaco->data_separacao, ',', true)) ?></td>
            <td><?= h($separaco->hora_finalizacao) ?></td>
            <td><?= $this->Number->format($separaco->n_separacao) ?></td>
            <td><?= $this->Number->format($separaco->qtd_colheres_macho) ?></td>
            <td><?= $this->Number->format($separaco->qtd_colheres_femea) ?></td>
            <td><?= $this->Number->format($separaco->qtd_bdj_descart_ap_separ) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Vizualizar'), ['action' => 'view', $separaco->separacoesid]) ?>
                <br>
             <!--    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $separaco->separacoesid]) ?>
                <br> -->
<!--                 <?= $this->Html->link(__('Contagem'), ['controller' => 'costagem', 'action' => 'list_add', $separaco->separacoesid])?>
                <br>
                <?= $this->Html->link(__('Controle'), ['controller' => 'controle', 'action' => 'list_add', $separaco->separacoesid])?>
                <br> -->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $separaco->separacoesid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $separaco->separacoesid)]) ?>
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
