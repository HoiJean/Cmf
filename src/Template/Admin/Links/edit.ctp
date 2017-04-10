<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $link->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $link->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Links'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="links form large-9 medium-8 columns content">
    <?= $this->Form->create($link) ?>
    <fieldset>
        <legend><?= __('Edit Link') ?></legend>
        <?php
            echo $this->Form->control('menu_id', ['options' => $menus]);
            echo $this->Form->control('title');
            echo $this->Form->control('url');
            echo $this->Form->control('slug');
            echo $this->Form->control('parent_id', [
                'options' => $links,
                'empty' => __('None')
            ]);
            echo $this->Form->control('lft');
            echo $this->Form->control('rght');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
