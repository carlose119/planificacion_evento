<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= __('Editar Cancha') ?></h3>
        </div><!-- /.box-header -->
        <?= $this->Form->create($cancha) ?>
        <div class="box-body">
            <?= $this->element('../Canchas/Element/input') ?>            
            <?= $this->Form->button(__('Guardar')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>