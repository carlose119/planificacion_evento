<div class="box col-md-9">
    <div class="box-header">
        <h3 class="box-title"><?= __('Cargos') ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('cargo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', 'Creado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cargos as $cargo): ?>
                    <tr>
                        <td><?= h($cargo->cargo) ?></td>
                        <td><?= h($this->Time->format($cargo->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                        <td><?= h($this->Time->format($cargo->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('Ver'), ['action' => 'view', $cargo->id], ['class' => 'btn btn-info btn-xs']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cargo->id], ['class' => 'btn btn-success btn-xs']) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cargo->id], ['confirm' => __('Esta seguro que quieres eliminar el registro # {0}?', $cargo->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
