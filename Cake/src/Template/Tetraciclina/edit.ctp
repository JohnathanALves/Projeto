<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tetraciclina->tetraciclinaid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tetraciclina->tetraciclinaid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tetraciclina'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="tetraciclina form large-10 medium-9 columns">
    <?= $this->Form->create($tetraciclina); ?>
    <fieldset>
        <legend><?= __('Edit Tetraciclina') ?></legend>
        <?php
            echo $this->Form->input('fk_controle');
            echo $this->Form->input('qtd_larvas');
            echo $this->Form->input('qtd_pupas');
            echo $this->Form->input('qtd_adultos');
            echo $this->Form->input('qtd_adultos_voando');
            echo $this->Form->input('n_dias');
            echo $this->Form->input('nome_responsavel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
