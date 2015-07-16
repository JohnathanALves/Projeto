<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Bequer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Editar Bequer'), ['action' => 'edit', $bequer->bequerid]) ?> </li>
        <!--<li><?= $this->Form->postLink(__('Delete Bequer'), ['action' => 'delete', $bequer->bequerid], ['confirm' => __('Are you sure you want to delete # {0}?', $bequer->bequerid)]) ?> </li>-->
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>
    </ul>
</div>
<div class="bequer index large-10 medium-9 columns">
    <div class="row large-10 medium-9 columns">
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <!--<td><?= h($bequer->bequerid) ?></td>-->
                <td><?= $this->Number->format($bequer->n_bequer) ?></td>
                <td><?= $this->Number->format($bequer->volume) ?></td>
                <td><?= h($bequer->data_fim_eclosao) ?></td>
                <td><?= h($bequer->data_inicio_eclosao) ?></td>
                <td><?= $this->Number->format($bequer->contagem_amostra) ?></td>
                <td><?= h($bequer->hora_inicio_eclosao) ?></td>
                <td><?= h($bequer->hora_fim_eclosao) ?></td>
            </tr>
        </tbody>
        </table>
    </div>
    <h2>Ovos</h2>
    <div class="row large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <CAPTION ALIGN="bottom">
            Esta tabela exibe no máximo 3 registros. <?= $this->Html->link(__('Visualizar todos.'), ['controller'=> 'ovos','action' => 'viewAllInfo',$bequer->bequerid]) ?>
    </CAPTION>
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('ovosid') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
            <!--<th><?= $this->Paginator->sort('data_origem_dos_ovos') ?></th>-->
            <!--<th><?= $this->Paginator->sort('gramas_ovos_utilizados') ?></th>-->
            <th><?= h('Data de origem dos ovos') ?></th>
            <th><?= h('Gramas ovos utilizados') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ovos as $ovo): ?>
        <tr>
            <!--<td><?= h($ovo->ovosid) ?></td>-->
            <!--<td><?= h($ovo->fk_bequer) ?></td>-->
            <td><?= h($ovo->data_origem_dos_ovos) ?></td>
            <td><?= $this->Number->format($ovo->gramas_ovos_utilizados) ?></td>
            <td class="actions">
                <!--<?= $this->Html->link(__('Visualizar'), ['controller'=> 'ovos','action' => 'view', $ovo->ovosid]) ?>
                <?= $this->Html->link(__('Editar'), ['controller'=> 'ovos','action' => 'edit', $ovo->ovosid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller'=> 'ovos','action' => 'delete', $ovo->ovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $ovo->ovosid)]) ?>-->
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <br>
    <h2>Alíquotas</h2>
    <div class="row large-10 medium-9 columns">
        <table cellpadding="0" cellspacing="0">
        <CAPTION ALIGN="bottom">
            Esta tabela exibe no máximo 3 registros.<?= $this->Html->link(__('Visualizar todos.'), ['controller'=> 'aliquota','action' => 'viewAllInfo',$bequer->bequerid]) ?>
        </CAPTION>
        <thead>
            <tr>
                <!--<th><?= $this->Paginator->sort('aliquotaid') ?></th>-->
                <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
                <th><?= $this->Paginator->sort('n_aliquota', 'Numero da aliquota') ?></th>
                <th><?= $this->Paginator->sort('qtd_larvas', 'Quantidade de larvas') ?></th>
                <th class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($aliquota as $aliquotum): ?>
            <tr>
                <!--<td><?= h($aliquotum->aliquotaid) ?></td>-->
                <!--<td><?= h($aliquotum->fk_bequer) ?></td>-->
                <td><?= $this->Number->format($aliquotum->n_aliquota) ?></td>
                <td><?= $this->Number->format($aliquotum->qtd_larvas) ?></td>
                <td class="actions">
                    <!--<?= $this->Html->link(__('View'), ['action' => 'view', $aliquotum->aliquotaid]) ?>-->
                    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $aliquotum->aliquotaid]) ?>-->
                    <!--<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aliquotum->aliquotaid], ['confirm' => __('Are you sure you want to delete # {0}?', $aliquotum->aliquotaid)]) ?>-->
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
