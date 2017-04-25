<div class="box col-md-9">
    <div class="box-header">
        <h3 class="box-title"><?= __('Usuarios') ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('group_id', 'Grupo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('username', 'Usuarios') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('activo') ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user->has('group') ? h($user->group->name) : '' ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->nombre) ?></td>
                        <td><?= h($user->apellido) ?></td>
                        <td><?= h($user->activo == 1 ? 'Si' : 'No') ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-xs']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success btn-xs']) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Esta seguro que quieres eliminar el registro # {0}?', $user->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
