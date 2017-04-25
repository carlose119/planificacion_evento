<div class="cargos view large-9 medium-8 columns content">
    <h3><?= h($auditoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tabla') ?></th>
            <td><?= h($auditoria->tabla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tabla') ?></th>
            <td><?= $this->Number->format($auditoria->tabla_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accion') ?></th>
            <td><?= h($auditoria->accion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($auditoria->user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IP') ?></th>
            <td><?= h($auditoria->ip_conexion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($this->Time->format($auditoria->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($this->Time->format($auditoria->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
    </table>
</div>

<?php if ($auditoria->tabla_id != 0): ?>
    <div id='informacion-complementaria'>

    </div>
    <script type="text/javascript">
        ajax_get_link('auditorias', 'informacion-complementaria', '<?= $auditoria->tabla ?>', 'view', '<?= $auditoria->tabla_id ?>');
    </script>
<?php endif; ?>
