<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
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
            echo $this->Form->select('list_bequer', $optionBequer, ['multiple' => true]);
            echo $this->Form->input('data_montagem', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome_responsavel',['label' => 'Nome Responsável']);
            echo $this->Form->input('qtd_bandejas_montadas',['label'=>'Quantidade de bandejas montadas']);
            echo 'Tipo da bandeja';
            echo $this->Form->select('tipo_bandeja',['G'=>'Gaiola', 'C'=>'Controle'], ['empty' => '(Escolha uma opção)']);
            //echo $this->Form->input('tipo_bandeja');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
