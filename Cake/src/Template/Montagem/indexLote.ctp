<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova Montagem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Exibir por lote'), ['action' => 'indexLote']) ?></li>
        <li><?= $this->Html->link(__('Exibir por béquer'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="montagem index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('montagemid') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
            <th><?= $this->Paginator->sort('data_montagem','Data Montagem') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel','Nome do Responsável') ?></th>
            <th><?= $this->Paginator->sort('qtd_bandejas_montadas', 'Quantidade de bandejas montadas') ?></th>
            <th><?= $this->Paginator->sort('tipo_bandeja', 'Tipo da bandeja') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($montagem as $montagem): ?>
        <tr>
            <!--<td><?= h($montagem->montagemid) ?></td>-->
            <!--<td><?= h($montagem->fk_lotebandejas) ?></td>-->
            <!--<td><?= h($montagem->fk_bequer) ?></td>-->
            <td><?= h($montagem->data_montagem) ?></td>
            <td><?= h($montagem->nome_responsavel) ?></td>
            <td><?= $this->Number->format($montagem->qtd_bandejas_montadas) ?></td>
            <td><?= h($montagem->tipo_bandeja) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $montagem->fk_lotebandejas]) ?> <br>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $montagem->montagemid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $montagem->montagemid], ['confirm' => __('Tem certeza que deseja apagar TODAS as montagens desse lote?')]) ?>
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
