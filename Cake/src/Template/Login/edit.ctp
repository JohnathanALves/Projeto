<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $login->usuario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $login->usuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Login'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="login form large-10 medium-9 columns">
    <?= $this->Form->create($login); ?>
    <fieldset>
        <legend><?= __('Edit Login') ?></legend>
        <?php
            echo $this->Form->input('senha');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
