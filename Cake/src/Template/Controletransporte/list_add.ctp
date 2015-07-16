<div class="actions columns large-2 medium-3">
    <h3><?= __('Votar para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Lote transporte'), ['controller'=> 'lotetransporte', 'action' => 'viewAllInfo', $lote_transporte_id]) ?></li>
        <li><?= $this->Html->link(__('Visualizar controle transporte'), ['action' => 'viewAllInfo', $lote_transporte_id]) ?></li>
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
                <?= $this->Html->link(__('Células'), ['controller' => 'celula', 'action' => 'viewAllInfo', $list->controletransporteid, $list->fk_lotetransporte] )?>
                <br>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->controletransporteid, $list->fk_lotetransporte], ['confirm' => __('Are you sure you want to delete # {0}?', $list->controletransporteid)]) ?>
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

    <?= $this->Form->create($c_transporte); ?>
    <fieldset>
        <legend><?= __('Formulário Controle Transporte') ?></legend>
        <?php
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{hour}}{{minute}}</div>'
            ]);

            // echo $this->Form->input('fk_lotetransporte',['label' => 'Transporte ID']);
            echo '<label> Horário do controle (HH:MM) </label>';
            echo $this->Form->time('hora_controle');
            echo $this->Form->input('situação_dia1',['label' => 'Situação dia1']);
            echo $this->Form->input('situação_dia2',['label' => 'Situação dia2']);
            echo $this->Form->input('situação_dia3',['label' => 'Situação dia3']);
            echo $this->Form->input('comentario',['label' => 'Comentário']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>