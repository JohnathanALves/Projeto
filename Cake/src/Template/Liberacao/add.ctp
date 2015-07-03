<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Liberacao'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="liberacao form large-10 medium-9 columns">
    <?= $this->Form->create($liberacao); ?>
    <fieldset>
        <legend><?= __('Add Liberacao') ?></legend>
        <?php
            echo $this->Form->input('fk_lotetransporte');
            echo $this->Form->input('hora_inicial');
            echo $this->Form->input('hora_termino');
            echo $this->Form->input('tempo_de_manipulacao');
            echo $this->Form->input('percepcao_da_presenca_de_femeas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
