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
            <?= $this->Html->link(__('List Hotel'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hotel form content">
            <?= $this->Form->create($hotel) ?>
            <fieldset>
                <legend><?= __('Add Hotel') ?></legend>
                <?php
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('colonia');
                    echo $this->Form->control('cp');
                    echo $this->Form->control('ciudad');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('pais');
                    echo $this->Form->control('numeroPlazas');
                    echo $this->Form->control('estatus');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
