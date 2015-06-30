<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Temperaturatransporte'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="temperaturatransporte form large-10 medium-9 columns">
    <?= $this->Form->create($temperaturatransporte); ?>
    <fieldset>
        <legend><?= __('Add Temperaturatransporte') ?></legend>
        <?php
            echo $this->Form->input('fk_lotetransporte');
            echo $this->Form->input('n_leitura');
            echo $this->Form->input('hora_leitura');
            echo $this->Form->input('valor_leitura');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
