<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $controletransporte->controletransporteid],
                ['confirm' => __('Você está certo disto # {0}?', $controletransporte->controletransporteid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="controletransporte form large-10 medium-9 columns">
    <?= $this->Form->create($controletransporte); ?>
    <fieldset>
        <legend><?= __('Editar') ?></legend>
        <?php
            echo $this->Form->input('fk_lotetransporte',['label' => 'Transporte ID']);
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
