<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $controleliberacao->controleliberacaoid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $controleliberacao->controleliberacaoid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Controleliberacao'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="controleliberacao form large-10 medium-9 columns">
    <?= $this->Form->create($controleliberacao); ?>
    <fieldset>
        <legend><?= __('Edit Controleliberacao') ?></legend>
        <?php
            echo $this->Form->input('fk_separacaoliberacao');
            echo $this->Form->input('n_rd11_controle');
            echo $this->Form->input('qtd_pupas_vivas_pre');
            echo $this->Form->input('qtd_pupas_mortas_pre');
            echo $this->Form->input('qtd_adultos_vivos_pre');
            echo $this->Form->input('qtd_adultos_mortos_pre');
            echo $this->Form->input('qtd_pupas_vivas_pos');
            echo $this->Form->input('qtd_pupas_mortas_pos');
            echo $this->Form->input('qtd_adultos_vivos_pos');
            echo $this->Form->input('qtd_adultos_mortos_pos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
