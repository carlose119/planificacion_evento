<div class="box col-md-9">
    <div class="box-header">
        <h3 class="box-title"><?= __('Planificaciones') ?> <?php if($fecha != null) echo ' - ' . date("d-m-Y", strtotime($fecha)); ?></h3>        
    </div><!-- /.box-header -->
    <div class="pull-right">
        <?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('Agregar'), ['controller' => 'Planificaciones', 'action' => 'add'], ['class' => 'btn btn-success', 'escape' => false]) ?>
    </div>
    <div class="box-body table-responsive">

        <?php if ($planificaciones->count() > 0): ?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('evento') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('lugar') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('activo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created', 'Creado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($planificaciones as $planificacione): ?>
                        <tr>
                            <td><?= h($planificacione->evento) ?></td>
                            <td><?= h($planificacione->lugar) ?></td>
                            <td><?= h($this->Time->format($planificacione->fecha, 'dd-MM-YYYY')) ?></td>
                            <td><?= h($this->Time->format($planificacione->hora, 'HH:mm:ss')) ?></td>
                            <td><?= h($planificacione->activo == 1 ? 'Si' : 'No') ?></td>
                            <td><?= h($this->Time->format($planificacione->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                            <td><?= h($this->Time->format($planificacione->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $planificacione->id], ['class' => 'btn btn-info btn-xs']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $planificacione->id], ['class' => 'btn btn-success btn-xs']) ?>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $planificacione->id], ['confirm' => __('Esta seguro que quieres eliminar el registro # {0}?', $planificacione->id), 'class' => 'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('Primero')) ?>
                    <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                    <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de un total de {{count}}')]) ?></p>
            </div>
        </div>
    <?php else: ?>
        <h3>No hay eventos registrado para este dia</h3>
    <?php endif; ?>
</div>
