<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo lote de bandejas'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Editar Lote'), ['action' => 'edit', $lotebandeja->lotebandejasid]) ?> </li>
        <!--<li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lotebandeja->lotebandejasid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lotebandeja->lotebandejasid)]
            )
        ?></li>-->
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
    </ul>
</div>
<div class="bequer index large-10 medium-9 columns">
    <div class="row large-10 medium-9 columns">
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <!--<th><?= $this->Paginator->sort('lotebandejasid') ?></th>-->
                <th><?= $this->Paginator->sort('codigo', 'Numero Lote') ?></th>
                <th><?= $this->Paginator->sort('qtd_bdj_desc_antes_separacao', 'Quantidade de bandejas descartadas antes da separação') ?></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <!--<td><?= h($lotebandeja->lotebandejasid) ?></td>-->
                    <td><?= $this->Number->format($lotebandeja->codigo) ?></td>
                    <td><?= $this->Number->format($lotebandeja->qtd_bdj_desc_antes_separacao) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <h2><?= $this->Html->link(__('Alimentacao:'), ['controller'=> 'Alimentacao','action' => 'viewAllInfo',$lotebandeja->lotebandejasid]) ?></h2>
    <div class="row large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('alimentacaoid') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>-->
            <th><?= $this->Paginator->sort('dia') ?></th>
            <th><?= $this->Paginator->sort('variacao') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alimentacao as $alimentacao): ?>
        <tr>
            <!--<td><?= h($alimentacao->alimentacaoid) ?></td>-->
            <!--<td><?= h($alimentacao->fk_lotebandejas) ?></td>-->
            <td><?= h($alimentacao->dia) ?></td>
            <td><?= $this->Number->format($alimentacao->variacao) ?></td>
            <td class="actions">
                <!--<?= $this->Html->link(__('View'), ['action' => 'view', $alimentacao->alimentacaoid]) ?>-->
                <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $alimentacao->alimentacaoid]) ?>-->
                <!--<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alimentacao->alimentacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $alimentacao->alimentacaoid)]) ?>-->
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
</div>
