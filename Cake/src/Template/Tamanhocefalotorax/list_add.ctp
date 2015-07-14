<div class="actions columns large-2 medium-3">
    <h3><?= __('Voltar para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Controle'), ['controller' => 'controle', 'action' => 'view', $controle_id, $separacao_id]) ?></li>
    </ul>
</div>
<div class="tamanhocefalotorax index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
           <!--  <th><?= $this->Paginator->sort('tamanhocefalotoraxid', 'Tamanho do cefalotoráx ID') ?></th>
            <th><?= $this->Paginator->sort('fk_controle', 'Controle ID') ?></th> -->
            <th><?= $this->Paginator->sort('n_replicata', 'Nº da replicata') ?></th>
            <th><?= $this->Paginator->sort('macho') ?></th>
            <th><?= $this->Paginator->sort('femea') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_tamanhocefalotorax as $list): ?>
        <tr>
         <!--    <td><?= h($list->tamanhocefalotoraxid) ?></td>
            <td><?= h($list->fk_controle) ?></td> -->
            <td><?= $this->Number->format($list->n_replicata) ?></td>
            <td><?= $this->Number->format($list->macho) ?></td>
            <td><?= $this->Number->format($list->femea) ?></td>
            <td class="actions">
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->tamanhocefalotoraxid, $list->fk_controle, $separacao_id], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $list->tamanhocefalotoraxid)]) ?>
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

     <?= $this->Form->create($tamanhocefalotorax); ?>
    <fieldset>
        <legend><?= __('Adicionar Tamanho do cefalotorax') ?></legend>
        <?php
            echo $this->Form->input('n_replicata', ['label' => 'Nº da replicata']);
            echo $this->Form->input('macho', ['label' => 'Macho']);
            echo $this->Form->input('femea', ['label' => 'Fêmea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>