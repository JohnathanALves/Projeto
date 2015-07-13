<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $bequer->bequerid],
                ['confirm' => __('Tem certeza que deseja apagar o béquer # {0}?', $bequer->n_bequer)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bequer form large-10 medium-9 columns">
    <?= $this->Form->create($bequer); ?>
    <fieldset>
        <legend><?= __('Editar Bequer') ?></legend>
        <?php
            echo $this->Form->input('n_bequer',['label'=>'Número do béquer']);
            echo $this->Form->input('volume',['label'=>'Volume']);
            echo $this->Form->input('data_fim_eclosao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('hora_fim_eclosao', array('type' => 'text') );
            echo $this->Form->input('data_inicio_eclosao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('hora_inicio_eclosao', array('type' => 'text'));
            echo $this->Form->input('contagem_amostra',['label'=>'Contagem da amostra']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>