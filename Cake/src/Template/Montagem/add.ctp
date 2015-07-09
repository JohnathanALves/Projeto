<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="montagem form large-10 medium-9 columns">
    <?= $this->Form->create($montagem); ?>
    <fieldset>
        <legend><?= __('Adicionar Montagem') ?></legend>
        <?php

            //echo $this->Form->input('fk_lotebandejas');
            //echo $this->Form->input('fk_bequer');
            echo 'Lote da bandeja';
            echo $this->Form->select('fk_lotebandejas', $optionLotes, ['empty' => '(Escolha uma opção)']);
            echo 'Numero do béquer';
            echo $this->Form->select('fk_bequer', $optionBequer, ['empty' => '(Escolha uma opção)']);
            echo $this->Form->input('data_montagem', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome_responsavel');
            echo $this->Form->input('qtd_bandejas_montadas');
            echo $this->Form->input('tipo_bandeja');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
