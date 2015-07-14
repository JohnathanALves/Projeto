<div class="actions columns large-2 medium-3">
    <h3><?= __('Voltar para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Separação'), ['controller' => 'separacoes', 'action' => 'view', $separacoes_id]) ?></li>
    </ul>
</div>
<div class="costagem index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
          <!--   <th><?= $this->Paginator->sort('costagemid', 'Contagem ID') ?></th>
            <th><?= $this->Paginator->sort('fk_separacoes', 'Separação ID') ?></th> -->
            <th><?= $this->Paginator->sort('n_amostra', 'Nº da amostra') ?></th>
            <th><?= $this->Paginator->sort('qtd_macho', 'Quantidade de machos') ?></th>
            <th><?= $this->Paginator->sort('qtd_femea', 'Quantidade de fêmeas') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
            <th><?= $this->Paginator->sort('sexo', 'Sexo') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($costagens as $list): ?>
        <tr>
           <!--  <td><?= h($list->costagemid) ?></td>
            <td><?= h($list->fk_separacoes) ?></td> -->
            <td><?= $this->Number->format($list->n_amostra) ?></td>
            <td><?= $this->Number->format($list->qtd_macho) ?></td>
            <td><?= $this->Number->format($list->qtd_femea) ?></td>
            <td><?= h($list->nome_responsavel) ?></td>
            <td><?= h($list->sexo) ?></td>
            <td class="actions">
                <!-- <?= $this->Html->link(__('Vizualizar'), ['action' => 'view', $costagem->costagemid]) ?> -->
                <!-- <?= $this->Html->link(__('Editar'), ['action' => 'list_add', null, $costagem->costagemid]) ?> cuidado com os parametros no array aqui -->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->costagemid, $list->fk_separacoes], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $list->costagemid)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
    
    <?= $this->Form->create($costagem); ?>
        <fieldset>
            <legend><?= __('Adicionar Contagem') ?></legend>
            <?php
                echo $this->Form->input('n_amostra', ['label' => 'Nº da amostra']);
                echo $this->Form->input('qtd_macho', ['label' => 'Quantidade de machos']);
                echo $this->Form->input('qtd_femea', ['label' => 'Quantidade de fêmeas']);
                echo $this->Form->input('nome_responsavel', ['label' => 'Nome do responsável']);
                echo $this->Form->select('sexo', ['M' => 'Masculino', 'F' => 'Feminino'], ['label' => 'Sexo']);
            ?>
        </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>