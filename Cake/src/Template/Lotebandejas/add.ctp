<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotebandejas form large-10 medium-9 columns">
    <?= $this->Form->create($lotebandeja); ?>
    <fieldset>
        <legend><?= __('Adicionar Lote de bandeja') ?></legend>
        <?php
            echo $this->Form->input('qtd_bdj_desc_antes_separacao', ['label' => 'Quantidade de bandejas descartadas antes da separação']);
            echo $this->Form->input('codigo', ['label' => 'Numero lote']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
