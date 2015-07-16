<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
<!--         <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $controle->controleid]) ?> </li>
 -->        

        <li><?= $this->Html->link(__('Controle tetraciclina'), ['controller' => 'tetraciclina', 'action' => 'list_add', $controle->controleid, $separacoes_id]) ?></li>
        <li><?= $this->Html->link(__('Repasse da amostra'), ['controller' => 'amostrarepasse', 'action' => 'list_add', $controle->controleid, $separacoes_id]) ?></li>
        <li><?= $this->Html->link(__('Análise da fluorescência'), ['controller' => 'analiseflorescencia', 'action' => 'list_add', $controle->controleid, $separacoes_id]) ?></li>
        <li><?= $this->Html->link(__('Tamanho do cefalotorax'), ['controller' => 'tamanhocefalotorax', 'action' => 'list_add', $controle->controleid, $separacoes_id]) ?></li>
        <li> <?= $this->Html->link(__('Listar'), ['action' => 'list_add', $separacoes_id]) ?> </li>
<!--         <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
 -->    
        </ul>
</div>
<div class="controle view large-10 medium-9 columns">
    <h2> Controle </h2>
    <div class="row">
        <div class="large-5 columns strings">
          <!--   <h6 class="subheader"><?= __('Controle ID') ?></h6>
            <p><?= h($controle->controleid) ?></p>
            <h6 class="subheader"><?= __('Separações ID') ?></h6> -->
         <!--    <p><?= h($controle->fk_separacoes) ?></p> -->
            <h6 class="subheader"><?= __('Nome do Responsável') ?></h6>
            <p><?= h($controle->nome_responsavel) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Quantidade de pupas na colher') ?></h6>
            <p><?= $this->Number->format($controle->qtd_pupa_colher) ?></p>
            <h6 class="subheader"><?= __('Quantidade total de bandejas na separação') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_bandejas_separ) ?></p>
            <h6 class="subheader"><?= __('Quantidade de bandejas de controle') ?></h6>
            <p><?= $this->Number->format($controle->qtd_bandejas_controle) ?></p>
            <h6 class="subheader"><?= __('Quantidade total colheres macho') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_colheres_macho) ?></p>
            <h6 class="subheader"><?= __('Quantidade total colheres fêmea') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_colheres_femea) ?></p>
            <h6 class="subheader"><?= __('Quantidade total colheres côlonia') ?></h6>
            <p><?= $this->Number->format($controle->qtd_total_colheres_colonia) ?></p>
            <h6 class="subheader"><?= __('Total de colheres de controle') ?></h6>
            <p><?= $this->Number->format($controle->total_colheres_controle) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Foto Cefalotorax') ?></h6>
            <p><?= $controle->foto_cefalotorax ? __('Sim') : __('Não'); ?></p>
        </div>
    </div>
</div>
