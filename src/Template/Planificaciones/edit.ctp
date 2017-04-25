<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= __('Editar Planificación') ?></h3>
        </div><!-- /.box-header -->
        <?= $this->Form->create($planificacione) ?>
        <div class="box-body">
            <?= $this->element('../Planificaciones/Element/input') ?>            
            <?= $this->Form->button(__('Guardar')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>