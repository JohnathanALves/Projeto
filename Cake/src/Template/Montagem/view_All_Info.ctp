<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Montagem'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="montagem index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('montagemid') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
            <th><?= $this->Paginator->sort('data_montagem') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel') ?></th>
            <th><?= $this->Paginator->sort('qtd_bandejas_montadas') ?></th>
            <th><?= $this->Paginator->sort('tipo_bandeja') ?></th>
            <!--<th class="actions"><?= __('Actions') ?></th>-->
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
            <!--<td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'index', $montagem->montagemid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $montagem->montagemid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $montagem->montagemid], ['confirm' => __('Are you sure you want to delete # {0}?', $montagem->montagemid)]) ?>
            </td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <h2><?= $this->Html->link(__('Bequer'), ['controller'=> 'bequer','action' => 'index']) ?></h2>
    <table cellpadding="0" cellspacing="0">
    <CAPTION ALIGN="bottom">
    Esta tabela exibe no máximo 3 registros.
    </CAPTION>
        <thead>
            <tr>
                <!--<th><?= $this->Paginator->sort('bequerid') ?></th>-->
                <th><?= $this->Paginator->sort('n_bequer') ?></th>
                <th><?= $this->Paginator->sort('volume') ?></th>
                <th><?= $this->Paginator->sort('data_fim_eclosao') ?></th>
                <th><?= $this->Paginator->sort('data_inicio_eclosao') ?></th>
                <th><?= $this->Paginator->sort('contagem_amostra') ?></th>
                <th><?= $this->Paginator->sort('Hora Inicio Eclosao') ?></th>
                <th><?= $this->Paginator->sort('Hora Fim Eclosao') ?></th>
                <th class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($bequer as $bequer): ?>
            <tr>
                <!--<td><?= h($bequer->bequerid) ?></td>-->
                <td><?= $this->Number->format($bequer->n_bequer) ?></td>
                <td><?= $this->Number->format($bequer->volume) ?></td>
                <td><?= h($bequer->data_fim_eclosao) ?></td>
                <td><?= h($bequer->data_inicio_eclosao) ?></td>
                <td><?= $this->Number->format($bequer->contagem_amostra) ?></td>
                <td><?= h($bequer->hora_inicio_eclosao) ?></td>
                <td><?= h($bequer->hora_fim_eclosao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Nova Aliquota'), ['controller' => 'aliquota','action' => 'list_add', $bequer->bequerid,$bequer->n_bequer]) ?> <br>
                    <?= $this->Html->link(__('Novos Ovos'), ['controller' => 'ovos','action' => 'list_add', $bequer->bequerid,$bequer->n_bequer]) ?> <br>
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'bequer','action' => 'viewAllInfo', $bequer->bequerid]) ?> <br>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'bequer','action' => 'edit', $bequer->bequerid]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'bequer','action' => 'delete', $bequer->bequerid], ['confirm' => __('Tem certeza que deseja apagar o béquer # {0}?', $bequer->n_bequer)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <h2><?= $this->Html->link(__('Lotes de bandejas'), ['controller'=> 'lotebandejas','action' => 'index']) ?></h2>
    <table cellpadding="0" cellspacing="0">
    <CAPTION ALIGN="bottom">
    Esta tabela exibe no máximo 3 registros.
    </CAPTION>
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
                <?= $this->Html->link(__('Visualizar'), ['controller' => 'lotebandejas','action' => 'viewAllInfo', $lotebandeja->lotebandejasid]) ?> <br>
                <?= $this->Html->link(__('Editar'), ['controller' => 'lotebandejas','action' => 'edit', $lotebandeja->lotebandejasid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'lotebandejas','action' => 'delete', $lotebandeja->lotebandejasid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotebandeja->lotebandejasid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
