<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Controle'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="controle form large-10 medium-9 columns">
    <?= $this->Form->create($controle); ?>
    <fieldset>
        <legend><?= __('Add Controle') ?></legend>
        <?php
            echo $this->Form->input('fk_separacoes');
            echo $this->Form->input('qtd_pupa_colher');
            echo $this->Form->input('qtd_total_bandejas_separ');
            echo $this->Form->input('qtd_bandejas_controle');
            echo $this->Form->input('qtd_total_colheres_macho');
            echo $this->Form->input('qtd_total_colheres_femea');
            echo $this->Form->input('qtd_total_colheres_colonia');
            echo $this->Form->input('total_colheres_controle');
            echo $this->Form->input('nome_responsavel');
            echo $this->Form->input('foto_cefalotorax');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
