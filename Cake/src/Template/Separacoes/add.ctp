<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Separacoes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="separacoes form large-10 medium-9 columns">
    <?= $this->Form->create($separaco); ?>
    <fieldset>
        <legend><?= __('Add Separaco') ?></legend>
        <?php
            echo $this->Form->input('fk_lotebandejas');
            echo $this->Form->input('data_separacao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('n_separacao');
            echo $this->Form->input('qtd_colheres_macho');
            echo $this->Form->input('qtd_colheres_femea');
            echo $this->Form->input('hora_finalizacao');
            echo $this->Form->input('qtd_bdj_descart_ap_separ');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
