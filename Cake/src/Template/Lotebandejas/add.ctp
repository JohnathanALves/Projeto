<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotebandejas form large-10 medium-9 columns">
    <?= $this->Form->create($lotebandeja); ?>
    <fieldset>
        <legend><?= __('Add Lotebandeja') ?></legend>
        <?php
            echo $this->Form->input('n_lote', ['label' => 'Numero lote']);
            echo $this->Form->input('qtd_bdj_desc_antes_separacao', ['label' => 'Quantidade de bandejas descartadas antes da separação']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
