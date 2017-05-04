<div class="box col-md-9">
    <div class="box-header">
        <h3 class="box-title"><?= __('Canchas') ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">
        
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('activo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', 'Creado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($canchas as $cancha): ?>
                    <tr>
                        <td><?= h($cancha->nombre) ?></td>
                        <td><?= h($cancha->activo == 1 ? 'Si' : 'No') ?></td>
                        <td><?= h($this->Time->format($cancha->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                        <td><?= h($this->Time->format($cancha->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $cancha->id], ['class' => 'btn btn-info btn-xs']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cancha->id], ['class' => 'btn btn-success btn-xs']) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cancha->id], ['confirm' => __('Esta seguro que quieres eliminar la cancha # {0}?', $cancha->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
</div>
