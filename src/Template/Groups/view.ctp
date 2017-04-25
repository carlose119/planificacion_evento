<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($this->Time->format($group->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($this->Time->format($group->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eliminado') ?></th>
            <td><?= $group->eliminado ? __('Si') : __('No'); ?></td>
        </tr>
    </table>    
</div>
