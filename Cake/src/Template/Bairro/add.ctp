<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bairro form large-10 medium-9 columns">
    <?= $this->Form->create($bairro); ?>
    <fieldset>
        <legend><?= __('Adicionar Bairro') ?></legend>
        <?php
            echo $this->Form->input('data', array('empty' => true, 'default' => ''), ['label' => 'Data']);
            echo $this->Form->input('nome', ['label' => 'Nome']);
            echo $this->Form->input('fase', ['label' => 'Fase']);
            echo $this->Form->input('qtd_real_rd11', ['label' => 'Qtd Real rd11']);
            echo $this->Form->input('liberacao_semana', ['label' => 'Liberação semana']);
            echo $this->Form->input('populacao', ['label' => 'População']);
            echo $this->Form->input('alocacao', ['label' => 'Alocação']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
