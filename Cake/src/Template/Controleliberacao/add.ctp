<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="controleliberacao form large-10 medium-9 columns">
    <?= $this->Form->create($controleliberacao); ?>
    <fieldset>
        <legend><?= __('Adicionar Controle liberação') ?></legend>
        <?php
            echo $this->Form->input('fk_separacaoliberacao', ['label' => 'separa/libera']);
            echo $this->Form->input('n_rd11_controle');
            echo $this->Form->input('qtd_pupas_vivas_pre', ['label' => 'Pupas vivas_pré']);
            echo $this->Form->input('qtd_pupas_mortas_pre', ['label' => 'Pupas mortas_pré']);
            echo $this->Form->input('qtd_adultos_vivos_pre', ['label' => 'Adultos vivos_pré']);
            echo $this->Form->input('qtd_adultos_mortos_pre', ['label' => 'Adultos mortos_pré']);
            echo $this->Form->input('qtd_pupas_vivas_pos', ['label' => 'Pupas vivas_pós']);
            echo $this->Form->input('qtd_pupas_mortas_pos', ['label' => 'Pupas mortas_pós']);
            echo $this->Form->input('qtd_adultos_vivos_pos', ['label' => 'Adultos vivos_pós']);
            echo $this->Form->input('qtd_adultos_mortos_pos', ['label' => 'Adultos mortos_pós']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
