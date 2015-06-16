<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Bairro'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bairro form large-10 medium-9 columns">
    <?= $this->Form->create($bairro); ?>
    <fieldset>
        <legend><?= __('Add Bairro') ?></legend>
        <?php
            echo $this->Form->input('data', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome');
            echo $this->Form->input('fase');
            echo $this->Form->input('qtd_real_rd11');
            echo $this->Form->input('liberacao_semana');
            echo $this->Form->input('populacao');
            echo $this->Form->input('alocacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
