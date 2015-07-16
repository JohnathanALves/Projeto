<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Formulário Controle Transporte'), ['action' => 'list_add', $lote_transporte_id]) ?></li>
    </ul>
</div>
<div class="controletransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
        <!--     <th><?= $this->Paginator->sort('Transporte ID') ?></th>
            <th><?= $this->Paginator->sort('Lote') ?></th> -->
            <th><?= $this->Paginator->sort('hora_controle', 'Hora Controle') ?></th>
            <th><?= $this->Paginator->sort('situação_dia1', 'Situação do dia 1') ?></th>
            <th><?= $this->Paginator->sort('situação_dia2', 'Situação do dia 2') ?></th>
            <th><?= $this->Paginator->sort('situação_dia3', 'Situação do dia 3') ?></th>
            <th><?= $this->Paginator->sort('Comentário') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_ctrl_trans as $list): ?>
        <tr>
          <!--   <td><?= h($list->controletransporteid) ?></td>
            <td><?= h($list->fk_lotetransporte) ?></td> -->
            <td><?= h($list->hora_controle) ?></td>
            <td><?= h($list->situação_dia1) ?></td>
            <td><?= h($list->situação_dia2) ?></td>
            <td><?= h($list->situação_dia3) ?></td>
            <td><?= h($list->comentario) ?></td>
            <td class="actions">
             <?= $this->Html->link(__('Células'), ['controller' => 'celula', 'action' => 'viewAllInfo', $list->controletransporteid, $list->fk_lotetransporte] ) ?>

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