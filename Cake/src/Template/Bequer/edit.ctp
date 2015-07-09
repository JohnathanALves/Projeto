<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bequer->bequerid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bequer->bequerid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bequer'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bequer form large-10 medium-9 columns">
    <?= $this->Form->create($bequer); ?>
    <fieldset>
        <legend><?= __('Edit Bequer') ?></legend>
        <?php
            echo $this->Form->input('n_bequer');
            echo $this->Form->input('volume');
            echo $this->Form->input('data_fim_eclosao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('hora_fim_eclosao',array('type' => 'text'));
            echo $this->Form->input('data_inicio_eclosao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('hora_inicio_eclosao',array('type' => 'text'));
            echo $this->Form->input('contagem_amostra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
