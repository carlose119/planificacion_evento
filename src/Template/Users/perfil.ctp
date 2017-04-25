<section class="invoice">
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
            <b><?= __('Grupo') ?>:</b> <?= $user->has('group') ? h($user->group->name) : '' ?><br/>
            <b><?= __('Email') ?>:</b> <?= h($user->email) ?><br/>
            <b><?= __('Usuario') ?>:</b> <?= h($user->username) ?><br/>
            <b><?= __('Nombre') ?>:</b> <?= h($user->nombre) ?><br/>
            <b><?= __('Apellido') ?>:</b> <?= h($user->apellido) ?><br/> 
            <br/>
        </div><!-- /.col -->
    </div><!-- /.row -->
    
    <div class="row no-print">
        <div class="col-xs-6">
            <?= $this->Html->link('<i class="fa fa-edit"></i> '.__('Editar'), ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
        </div>
    </div>
</section>