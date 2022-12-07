<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hotel $hotel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hotel'), ['action' => 'edit', $hotel->idHotel], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hotel'), ['action' => 'delete', $hotel->idHotel], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->idHotel), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hotel'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hotel'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hotel view content">
            <h3><?= h($hotel->idHotel) ?></h3>
            <table>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($hotel->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($hotel->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($hotel->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colonia') ?></th>
                    <td><?= h($hotel->colonia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp') ?></th>
                    <td><?= h($hotel->cp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ciudad') ?></th>
                    <td><?= h($hotel->ciudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($hotel->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($hotel->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdHotel') ?></th>
                    <td><?= $this->Number->format($hotel->idHotel) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroPlazas') ?></th>
                    <td><?= $this->Number->format($hotel->numeroPlazas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $this->Number->format($hotel->estatus) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
