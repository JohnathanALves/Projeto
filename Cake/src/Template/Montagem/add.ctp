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
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);
            //echo $this->Form->input('fk_lotebandejas');
            //echo $this->Form->input('fk_bequer');
            echo '<label>Lote da bandeja</label>';
            echo $this->Form->select('fk_lotebandejas', $optionLotes, ['empty' => '(Escolha uma opção)']);
            echo '<label>Tipo do lote</label>';
            echo $this->Form->select('tipo_bandeja',['S'=>'Supressão', 'C'=>'Colônia'], ['empty' => '(Escolha uma opção)']);
            echo '<label>Numero do béquer</label>';
            echo $this->Form->select('list_bequer', $optionBequer, ['multiple' => true]);
            echo $this->Form->input('data_montagem', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome_responsavel',['label' => 'Nome Responsável']);
            echo $this->Form->input('qtd_bandejas_montadas',['label'=>'Quantidade de bandejas montadas']);
            //echo $this->Form->input('tipo_bandeja');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
