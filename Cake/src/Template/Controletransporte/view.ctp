<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $controletransporte->controletransporteid]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $controletransporte->controletransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $controletransporte->controletransporteid)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Formulário'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="controletransporte view large-10 medium-9 columns">
    <h2><?= h($controletransporte->controletransporteid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= h($controletransporte->controletransporteid) ?></p>
            <h6 class="subheader"><?= __('Lote') ?></h6>
            <p><?= h($controletransporte->fk_lotetransporte) ?></p>
            <h6 class="subheader"><?= __('Situação Dia1') ?></h6>
            <p><?= h($controletransporte->situação_dia1) ?></p>
            <h6 class="subheader"><?= __('Situação Dia2') ?></h6>
            <p><?= h($controletransporte->situação_dia2) ?></p>
            <h6 class="subheader"><?= __('Situação Dia3') ?></h6>
            <p><?= h($controletransporte->situação_dia3) ?></p>
            <h6 class="subheader"><?= __('Comentário') ?></h6>
            <p><?= h($controletransporte->comentario) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Horário') ?></h6>
            <?= $this->Text->autoParagraph(h($controletransporte->hora_controle)); ?>

        </div>
    </div>
</div>
