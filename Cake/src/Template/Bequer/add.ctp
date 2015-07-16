<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bequer form large-10 medium-9 columns">
    <?= $this->Form->create($bequer); ?>
    <fieldset>
        <legend><?= __('Adicionar Béquer') ?></legend>
        <?php
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);

            echo $this->Form->input('n_bequer',['label'=>'Número do béquer']);
            echo $this->Form->input('volume',['label'=>'Volume']);
            echo "<label>Data/Horário do início eclosão</label>";
            echo $this->Form->datetime('inicio_eclosao', array('empty' => false));
            echo "<label>Data/Horário do fim eclosão</label>";
            echo $this->Form->datetime('fim_eclosao', array('empty' => false));
            echo $this->Form->input('contagem_amostra',['label'=>'Contagem da amostra']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>

