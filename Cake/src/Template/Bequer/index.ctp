<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo bequer'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="bequer index large-10 medium-9 columns">
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
            <td><?= substr($bequer->data_inicio_eclosao, 0, 8) ?></td>
            <td><?= $this->Number->format($bequer->contagem_amostra) ?></td>
            <td><?= h($bequer->hora_inicio_eclosao) ?></td>
            <td><?= h($bequer->hora_fim_eclosao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Nova Aliquota'), ['controller' => 'aliquota','action' => 'list_add', $bequer->bequerid,$bequer->n_bequer]) ?> <br>
                <?= $this->Html->link(__('Nova coleta de ovos'), ['controller' => 'ovos','action' => 'list_add', $bequer->bequerid,$bequer->n_bequer]) ?> <br>
                <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $bequer->bequerid]) ?> <br>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bequer->bequerid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $bequer->bequerid], ['confirm' => __('Tem certeza que deseja apagar o béquer # {0}?', $bequer->n_bequer)]) ?>
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
