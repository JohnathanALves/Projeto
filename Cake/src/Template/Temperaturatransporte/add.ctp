<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Temperatura e transporte'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="temperaturatransporte form large-10 medium-9 columns">
    <?= $this->Form->create($temperaturatransporte); ?>
    <fieldset>
        <legend><?= __('Adicionar Temperatura e transporte') ?></legend>
        <?php
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);
            //echo $this->Form->input('fk_lotetransporte');
            echo '<label>Lote do transporte</label>';
            echo $this->Form->select('fk_lotetransporte', $optionLotes, ['empty' => '(Escolha uma opção)']);
            echo $this->Form->input('n_leitura', ['label' => 'Número da leitura']);
            echo '<label>Hora da leitura</label>';
            echo $this->Form->time('hora_leitura',['empty' => false]);
            echo $this->Form->input('valor_leitura', ['label' => 'Valor da leitura']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
