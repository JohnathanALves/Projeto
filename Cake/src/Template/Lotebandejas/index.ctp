<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Lote de bandejas'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="lotebandejas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('lotebandejasid') ?></th>-->
            <th><?= $this->Paginator->sort('codigo', 'Numero Lote') ?></th>
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
                <?= $this->Html->link(__('Alimentação'), ['controller' => 'alimentacao', 'action' => 'list_add', $lotebandeja->lotebandejasid,$lotebandeja->codigo ]) ?> <br>
                <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $lotebandeja->lotebandejasid]) ?> <br>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $lotebandeja->lotebandejasid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $lotebandeja->lotebandejasid], ['confirm' => __('Tem certeza que deseja apagar esse lote # {0}?', $lotebandeja->codigo)]) ?>
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