<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Formulário Transporte'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="controletransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Transporte ID') ?></th>
            <th><?= $this->Paginator->sort('Lote') ?></th>
            <th><?= $this->Paginator->sort('Situação Dia1') ?></th>
            <th><?= $this->Paginator->sort('Situação Dia2') ?></th>
            <th><?= $this->Paginator->sort('Situação Dia3') ?></th>
            <th><?= $this->Paginator->sort('Comentário') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_controle_transporte as $controletransporte): ?>
        <tr>
            <td><?= h($controletransporte->controletransporteid) ?></td>
            <td><?= h($controletransporte->fk_lotetransporte) ?></td>
            <td><?= h($controletransporte->situação_dia1) ?></td>
            <td><?= h($controletransporte->situação_dia2) ?></td>
            <td><?= h($controletransporte->situação_dia3) ?></td>
            <td><?= h($controletransporte->comentario) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $controletransporte->controletransporteid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $controletransporte->controletransporteid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $controletransporte->controletransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $controletransporte->controletransporteid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('liberacaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>
            <th><?= $this->Paginator->sort('tempo_de_manipulacao') ?></th>
            <th><?= $this->Paginator->sort('percepcao_da_presenca_de_femeas') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_liberacao as $liberacao): ?>
        <tr>
            <td><?= h($liberacao->liberacaoid) ?></td>
            <td><?= h($liberacao->fk_lotetransporte) ?></td>
            <td><?= $this->Number->format($liberacao->tempo_de_manipulacao) ?></td>
            <td><?= h($liberacao->percepcao_da_presenca_de_femeas) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $liberacao->liberacaoid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $liberacao->liberacaoid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $liberacao->liberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $liberacao->liberacaoid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('temperaturatransporteid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>
            <th><?= $this->Paginator->sort('n_leitura') ?></th>
            <th><?= $this->Paginator->sort('valor_leitura') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_temp_transporte as $temperaturatransporte): ?>
        <tr>
            <td><?= h($temperaturatransporte->temperaturatransporteid) ?></td>
            <td><?= h($temperaturatransporte->fk_lotetransporte) ?></td>
            <td><?= $this->Number->format($temperaturatransporte->n_leitura) ?></td>
            <td><?= $this->Number->format($temperaturatransporte->valor_leitura) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $temperaturatransporte->temperaturatransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $temperaturatransporte->temperaturatransporteid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

</div>