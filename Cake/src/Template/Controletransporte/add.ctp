<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Controletransporte'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="controletransporte form large-10 medium-9 columns">
    <?= $this->Form->create($controletransporte); ?>
    <fieldset>
        <legend><?= __('Add Controletransporte') ?></legend>
        <?php
            echo $this->Form->input('fk_lotetransporte');
            echo $this->Form->input('hora_controle');
            echo $this->Form->input('situação_dia1');
            echo $this->Form->input('situação_dia2');
            echo $this->Form->input('situação_dia3');
            echo $this->Form->input('comentario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
