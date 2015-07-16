<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Temperatura e transporte'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="temperaturatransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('Lote Transporte ID') ?></th>
            <th><?= $this->Paginator->sort('Separação') ?></th>-->
            <th><?= $this->Paginator->sort('nº transporte') ?></th>
            <th><?= $this->Paginator->sort('qtd colheres célula') ?></th>
            <th><?= $this->Paginator->sort('Cor lote') ?></th>
            <th><?= $this->Paginator->sort('qtd c25 completas envio') ?></th>
            <th><?= $this->Paginator->sort('qtd c25 incompletas envio') ?></th>
            <!--<<th class="actions"><?= __('Opções') ?></th>-->
        </tr>
    </thead>
    <tbody>
        <tr>
            <!--<td><?= h($lotetransporte->lotetransporteid) ?></td>
            <td><?= h($lotetransporte->fk_separacao) ?></td>-->
            <td><?= $this->Number->format($lotetransporte->n_transporte) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_colheres_celula) ?></td>
            <td><?= h($lotetransporte->cor_lote) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_c25_completas_envio) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_c25_incompletas_envio) ?></td>
            <!--<<td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $lotetransporte->lotetransporteid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $lotetransporte->lotetransporteid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $lotetransporte->lotetransporteid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $lotetransporte->lotetransporteid)]) ?>-->
            </td>
        </tr>
    </tbody>
    </table>
    <h2>Temperaturas</h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('temperaturatransporteid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>-->
            <th><?= $this->Paginator->sort('n_leitura') ?></th>
            <th><?= $this->Paginator->sort('valor_leitura') ?></th>
            <th><?= $this->Paginator->sort('hora_leitura') ?></th>
            <!--<th class="actions"><?= __('Actions') ?></th>-->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($temperaturatransporte as $temperaturatransporte): ?>
        <tr>
            <!--<td><?= h($temperaturatransporte->temperaturatransporteid) ?></td>
            <td><?= h($temperaturatransporte->fk_lotetransporte) ?></td>-->
            <td><?= $this->Number->format($temperaturatransporte->n_leitura) ?></td>
            <td><?= $this->Number->format($temperaturatransporte->valor_leitura) ?></td>
            <td><?= h($temperaturatransporte->hora_leitura) ?></td>
            <!--<td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $temperaturatransporte->temperaturatransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $temperaturatransporte->temperaturatransporteid)]) ?>
            </td>-->
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
