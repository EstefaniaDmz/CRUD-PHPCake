<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sucursal $sucursal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sucursal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sucursal form content">
            <?= $this->Form->create($sucursal) ?>
            <fieldset>
                <legend><?= __('Add Sucursal') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('colonia');
                    echo $this->Form->control('cp');
                    echo $this->Form->control('numeroPlazas');
                    echo $this->Form->control('estatus');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
