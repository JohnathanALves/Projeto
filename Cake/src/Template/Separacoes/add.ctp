<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Separações'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="separacoes form large-10 medium-9 columns">
    <?= $this->Form->create($separaco); ?>
    <fieldset>
        <legend><?= __('Adicionar Separação') ?></legend>
        <?php
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);

            echo '<label> Código do lote </label>';
            echo $this->Form->select('fk_lotebandejas', $options);
            echo '<label> Data/horário da finalização</label>';
            echo $this->Form->datetime('time_separacao', array('empty' => false, 'default' => ''));
            echo $this->Form->input('n_separacao', ['label' => 'Nº separação']);
            echo $this->Form->input('qtd_colheres_macho', ['label' => 'Quantidade de colheres macho']);
            echo $this->Form->input('qtd_colheres_femea', ['label' => 'Quantidade de colheres fêmeas']);     
         //   echo $this->Form->input('hora_finalizacao', ['type' => 'time', 'label' => 'Hora de finalização']);
            echo $this->Form->input('qtd_bdj_descart_ap_separ', ['label' => 'Quandidade de bandejas descartadas ao separar']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
