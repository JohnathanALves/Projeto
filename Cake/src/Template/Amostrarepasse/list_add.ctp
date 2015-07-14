<div class="actions columns large-2 medium-3">
    <h3><?= __('Voltar para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Controle'), ['controller' => 'controle', 'action' => 'view', $controle_id, $separacao_id]) ?></li>
    </ul>
</div>
<div class="amostrarepasse index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
         <!--    <th><?= $this->Paginator->sort('amostrarepasseid', 'Repasse da amostra ID') ?></th>
            <th><?= $this->Paginator->sort('fk_controle', 'Controle ID') ?></th> -->
            <th><?= $this->Paginator->sort('n_amostra', 'Nº da amostra') ?></th>
            <th><?= $this->Paginator->sort('qtd_machos', 'Quantidade de machos') ?></th>
            <th><?= $this->Paginator->sort('qtd_femeas', 'Quantidade de fêmeas') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($amostras as $list): ?>
        <tr>
         <!--    <td><?= h($list->amostrarepasseid) ?></td>
            <td><?= h($list->fk_controle) ?></td> -->
            <td><?= $this->Number->format($list->n_amostra) ?></td>
            <td><?= $this->Number->format($list->qtd_machos) ?></td>
            <td><?= $this->Number->format($list->qtd_femeas) ?></td>
            <td><?= h($list->nome_responsavel) ?></td>
            <td class="actions">
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->amostrarepasseid, $list->fk_controle, $separacao_id ], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $list->amostrarepasseid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>

    <?= $this->Form->create($amostrarepasse); ?>
    <fieldset>
        <legend><?= __('Adicionar repasse da amostra') ?></legend>
        <?php
            echo $this->Form->input('n_amostra', ['label' => 'Nº da amostra']);
            echo $this->Form->input('qtd_machos', ['label' => 'Quantidade de machos']);
            echo $this->Form->input('qtd_femeas', ['label' => 'Quantidade de fêmeas']);
            echo $this->Form->input('nome_responsavel', ['label' => 'Nome do responsável']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
