<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Amostrarepasse'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="amostrarepasse form large-10 medium-9 columns">
    <?= $this->Form->create($amostrarepasse); ?>
    <fieldset>
        <legend><?= __('Add Amostrarepasse') ?></legend>
        <?php
            echo $this->Form->input('fk_controle');
            echo $this->Form->input('n_amostra');
            echo $this->Form->input('qtd_machos');
            echo $this->Form->input('qtd_femeas');
            echo $this->Form->input('nome_responsavel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
