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
            echo $this->Form->input('n_bequer',['label'=>'Número do béquer']);
            echo $this->Form->input('volume');
            echo $this->Form->input('data_fim_eclosao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('hora_fim_eclosao', array('type' => 'text') );
            echo $this->Form->input('data_inicio_eclosao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('hora_inicio_eclosao', array('type' => 'text'));
            echo $this->Form->input('contagem_amostra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>

