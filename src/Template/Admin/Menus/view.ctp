<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Links'), ['controller' => 'Links', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link'), ['controller' => 'Links', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="menus view large-9 medium-8 columns content">
    <div class="related">
        <h4><?= __('Links') ?></h4>
        <?php if (!empty($menu->links)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menu->links as $links): ?>
            <?php if($links->parent_id): ?>
            <tr>
                <td><?= h($links->id) ?></td>
                <td style="padding-left: 30px;"><?= h($links->title) ?></td>
                <td><?= h($links->url) ?></td>
                <td><?= h($links->slug) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Links', 'action' => 'edit', $links->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Links', 'action' => 'delete', $links->id], ['confirm' => __('Are you sure you want to delete # {0}?', $links->id)]) ?>
                    <?= $this->Form->postLink(__('Move up'), ['controller' => 'Links', 'action' => 'moveUp', $links->id]) ?>
                    <?= $this->Form->postLink(__('Move down'), ['controller' => 'Links', 'action' => 'moveDown', $links->id]) ?>
                </td>
            </tr>

            <?php else: ?>
                <tr>
                    <td><?= h($links->id) ?></td>
                    <td><?= h($links->title) ?></td>
                    <td><?= h($links->url) ?></td>
                    <td><?= h($links->slug) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Links', 'action' => 'edit', $links->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Links', 'action' => 'delete', $links->id], ['confirm' => __('Are you sure you want to delete # {0}?', $links->id)]) ?>
                        <?= $this->Form->postLink(__('Move up'), ['controller' => 'Links', 'action' => 'moveUp', $links->id]) ?>
                        <?= $this->Form->postLink(__('Move down'), ['controller' => 'Links', 'action' => 'moveDown', $links->id]) ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
