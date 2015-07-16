<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova Montagem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Montagem'), ['action' => 'index']) ?></li>
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
            <th><?= $this->Paginator->sort('tipo_bandeja', 'Tipo do lote') ?></th>
            <!--<th class="actions"><?= __('Actions') ?></th>-->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($montagem as $montagem): ?>
        <tr>
            <!--<td><?= h($montagem->montagemid) ?></td>-->
            <!--<td><?= h($montagem->fk_lotebandejas) ?></td>-->
            <!--<td><?= h($montagem->fk_bequer) ?></td>-->
            <td><?= substr($montagem->data_montagem,0,8) ?></td>
            <td><?= h($montagem->nome_responsavel) ?></td>
            <td><?= $this->Number->format($montagem->qtd_bandejas_montadas) ?></td>
            <td><?= h($montagem->tipo_bandeja) ?></td>
            <!--<td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'index', $montagem->montagemid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $montagem->montagemid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $montagem->montagemid], ['confirm' => __('Are you sure you want to delete # {0}?', $montagem->montagemid)]) ?>
            </td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
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
                <!--<?= $this->Html->link(__('Alimentação'), ['controller' => 'alimentacao', 'action' => 'list_add', $lotebandeja->lotebandejasid,$lotebandeja->codigo ]) ?> <br>-->
                <?= $this->Html->link(__('Ver Alimentação'), ['controller' => 'alimentacao','action' => 'viewAllInfo', $lotebandeja->lotebandejasid]) ?> <br>
                <!--<?= $this->Html->link(__('Editar'), ['controller' => 'lotebandejas','action' => 'edit', $lotebandeja->lotebandejasid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'lotebandejas','action' => 'delete', $lotebandeja->lotebandejasid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotebandeja->lotebandejasid)]) ?>-->
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <h2><?= $this->Html->link(__('Bequer'), ['controller'=> 'bequer','action' => 'index']) ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th><?= $this->Paginator->sort('bequerid') ?></th>-->
                <th><?= $this->Paginator->sort('n_bequer', 'Numero do Bequer') ?></th>
                <th><?= $this->Paginator->sort('volume', 'Volume') ?></th>
                <th><?= $this->Paginator->sort('data_fim_eclosao', 'Data do fim da eclosão') ?></th>
                <th><?= $this->Paginator->sort('data_inicio_eclosao', 'Data do início da eclosão') ?></th>
                <th><?= $this->Paginator->sort('contagem_amostra', 'Contagem da amostra') ?></th>
                <th><?= $this->Paginator->sort('Hora Inicio Eclosao', 'Hora do início da eclosão') ?></th>
                <th><?= $this->Paginator->sort('Hora Fim Eclosao', 'Hora do fim da eclosão') ?></th>
                <th class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($bequer as $bequer): ?>
            <tr>
                <!--<td><?= h($bequer->bequerid) ?></td>-->
                <td><?= $this->Number->format($bequer->n_bequer) ?></td>
                <td><?= $this->Number->format($bequer->volume) ?></td>
                <td><?= substr($bequer->data_fim_eclosao,0,8) ?></td>
                <td><?= substr($bequer->data_inicio_eclosao,0,8) ?></td>
                <td><?= $this->Number->format($bequer->contagem_amostra) ?></td>
                <td><?= h($bequer->hora_inicio_eclosao) ?></td>
                <td><?= h($bequer->hora_fim_eclosao) ?></td>
                <td class="actions">
                	<?= $this->Html->link(__('Ver Bequer'), ['controller' => 'bequer','action' => 'viewAllInfo', $bequer->bequerid]) ?> <br>
                    <?= $this->Html->link(__('Ver Aliquota'), ['controller' => 'aliquota','action' => 'viewAllInfo', $bequer->bequerid]) ?> <br>
                    <?= $this->Html->link(__('Ver Ovos'), ['controller' => 'ovos','action' => 'viewAllInfo', $bequer->bequerid]) ?> <br>
                    <!--<?= $this->Html->link(__('Editar Bequer'), ['controller' => 'bequer','action' => 'edit', $bequer->bequerid]) ?>-->
                    <!--<?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteIdBequer', $montagem->montagemid,$bequer->bequerid], ['confirm' => __('Tem certeza que deseja apagar o béquer # {0}?', $bequer->n_bequer)]) ?>-->
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
