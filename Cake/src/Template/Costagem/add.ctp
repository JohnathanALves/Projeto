<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Costagem'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="costagem form large-10 medium-9 columns">
    <?= $this->Form->create($costagem); ?>
    <fieldset>
        <legend><?= __('Add Costagem') ?></legend>
        <?php
            echo $this->Form->input('fk_separacoes');
            echo $this->Form->input('n_amostra');
            echo $this->Form->input('qtd_macho');
            echo $this->Form->input('qtd_femea');
            echo $this->Form->input('nome_responsavel');
            echo $this->Form->input('sexo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
