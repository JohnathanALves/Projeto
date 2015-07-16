<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova temperatura e Transporte'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Exibir por lote da bandeja'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Exibir por Numero de leitura'), ['action' => 'indexTodos']) ?></li>
    </ul>
</div>
<div class="temperaturatransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('lotebandejasid') ?></th>-->
            <th><?= $this->Paginator->sort('codigo', 'Numero do Lote da bandeja') ?></th>
            <th><?= $this->Paginator->sort('qtd_bdj_desc_antes_separacao', 'Quantidade de bandejas descartadas antes da separação') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($lotebandejas as $lotebandeja): ?>
        <tr>
            <!--<td><?= h($lotebandeja->lotebandejasid) ?></td>-->
            <td><?= $this->Number->format($lotebandeja->codigo) ?></td>
            <td><?= $this->Number->format($lotebandeja->qtd_bdj_desc_antes_separacao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $lotebandeja->lotebandejasid]) ?>
                <!--<?= $this->Html->link(__('Editar'), ['action' => 'edit', $lotebandeja->temperaturatransporteid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $lotebandeja->temperaturatransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotebandeja->temperaturatransporteid)]) ?>-->
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
