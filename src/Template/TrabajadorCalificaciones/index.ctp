<div class="box col-md-9">

    <div class="box-header">
        <h3 class="box-title"><?= __('Calificaciones') ?></h3>        
    </div><!-- /.box-header -->
    <div class="pull-right">
        <?= $this->Html->link('<i class="fa fa-plus"></i> ' . __('Agregar'), ['controller' => 'TrabajadorCalificaciones', 'action' => 'add'], ['class' => 'btn btn-success', 'escape' => false]) ?>
    </div>
    <div class="box-body table-responsive">        

        <?php if ($trabajadorCalificaciones->count() > 0): ?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('Planificaciones.evento') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('trabajador_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('calificacion', 'Calificación') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created', 'Creado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($trabajadorCalificaciones as $trabajadorCalificacione): ?>
                        <tr>
                            <td><?= $trabajadorCalificacione->has('planificacione') ? h($trabajadorCalificacione->planificacione->evento) : '' ?></td>
                            <td><?= $trabajadorCalificacione->has('trabajadore') ? h($trabajadorCalificacione->trabajadore->Datos) : '' ?></td>
                            <td><?= $this->Number->format($trabajadorCalificacione->calificacion) ?></td>
                            <td><?= h($this->Time->format($trabajadorCalificacione->created, 'dd-MM-YYYY')) ?></td>
                            <td><?= h($this->Time->format($trabajadorCalificacione->modified, 'dd-MM-YYYY')) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $trabajadorCalificacione->id], ['class' => 'btn btn-info btn-xs']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $trabajadorCalificacione->id], ['class' => 'btn btn-success btn-xs']) ?>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $trabajadorCalificacione->id], ['confirm' => __('Esta seguro que quieres eliminar la calificación # {0}?', $trabajadorCalificacione->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
        <h3>No hay calificaciones registradas.</h3>
    <?php endif; ?>
</div>
