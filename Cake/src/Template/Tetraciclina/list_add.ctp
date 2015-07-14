<div class="actions columns large-2 medium-3">
    <h3><?= __('Voltar para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Controle'), ['controller' => 'controle', 'action' => 'view', $controle_id, $separacao_id]) ?></li>
    </ul>
</div>
<div class="tetraciclina index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
 <!--            <th><?= $this->Paginator->sort('tetraciclinaid', 'Tetraciclina ID') ?></th>
            <th><?= $this->Paginator->sort('fk_controle', 'Controle ID') ?></th> -->
            <th><?= $this->Paginator->sort('qtd_larvas', 'Quantidade de larvas') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas', 'Quantidade de pupas') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos', 'Quantidade de adultos') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_voando', 'Quantidade de adultos voando') ?></th>
            <th><?= $this->Paginator->sort('n_dias', 'Nº de dias') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tetraciclinas as $list): ?>
        <tr>
          <!--   <td><?= h($list->tetraciclinaid) ?></td>
            <td><?= h($list->fk_controle) ?></td> -->
            <td><?= $this->Number->format($list->qtd_larvas) ?></td>
            <td><?= $this->Number->format($list->qtd_pupas) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos_voando) ?></td>
            <td><?= $this->Number->format($list->n_dias) ?></td>
            <td><?= h($list->nome_responsavel) ?></td>
            <td class="actions">
            <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->tetraciclinaid, $list->fk_controle, $separacao_id], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $list->tetraciclinaid)]) ?>
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

    <?= $this->Form->create($tetraciclina); ?>
    <fieldset>
        <legend><?= __('Adicionar tetraciclina') ?></legend>
        <?php
            // echo $this->Form->input('fk_controle', ['label' => 'Controle ID']);
            echo $this->Form->input('qtd_larvas', ['label' => 'Quantidade de larvas']);
            echo $this->Form->input('qtd_pupas', ['label' => 'Quantidade de pupas']);
            echo $this->Form->input('qtd_adultos', ['label' => 'Quantidade de adultos']);
            echo $this->Form->input('qtd_adultos_voando', ['label' => 'Quantidade de adultos voando']);
            echo $this->Form->input('n_dias', ['label' => 'Nº de dias']);
            echo $this->Form->input('nome_responsavel', ['label' => 'Nome do responsável']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
