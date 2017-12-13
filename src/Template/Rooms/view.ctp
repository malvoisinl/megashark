<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
<?= debug($showtimes->toArray())?>
    <h3><?= h($room->name) ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('horaires') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lundi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mardi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mercredi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jeudi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendredi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('samedi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dimanche') ?></th>

            </tr>
        </thead>
        
        <tbody>
        <?php
            for ($i=8;$i<=24;$i+=2){
                ?>
                <tr>
                <td>
                <?php echo $i.":00";?>
                </td>
                </tr>
        <?php
            }
        ?>
            <?php foreach ($room as $room): ?>
            <tr>
                <td><?= $this->Number->format($room->name) ?></td>
                <td><?= h($room->name) ?></td>
                <td><?= $this->Number->format($room->capacity) ?></td>
                <td><?= h($room->created) ?></td>
                <td><?= h($room->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $room->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $room->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
</div>
