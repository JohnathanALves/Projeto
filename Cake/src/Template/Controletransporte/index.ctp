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
    <?php foreach ($controletransporte as $controletransporte): ?>
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
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>

    <?= $this->Form->create($controletransporte); ?>
    <fieldset>
        <legend><?= __('Formulário Controle Transporte') ?></legend>
        <?php
            // echo $this->Form->input('fk_lotetransporte',['label' => 'Transporte ID']);
            echo $this->Form->input('hora_controle',['label' => 'Horário']);
            echo $this->Form->input('situação_dia1',['label' => 'Situação dia1']);
            echo $this->Form->input('situação_dia2',['label' => 'Situação dia2']);
            echo $this->Form->input('situação_dia3',['label' => 'Situação dia3']);
            echo $this->Form->input('comentario',['label' => 'Comentário']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
