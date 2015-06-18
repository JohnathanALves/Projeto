<div class="actions columns large-2 medium-3">
    <h3><?= __('Opções') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="login form large-10 medium-9 columns">
    <?= $this->Form->create(); ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('usuario');
            echo 'Senha';
            echo $this->Form->password('senha');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submeter')) ?>
    <?= $this->Form->end() ?>
</div>
