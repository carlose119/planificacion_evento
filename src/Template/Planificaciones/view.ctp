<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-9">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> <?= h($planificacione->evento) ?>
                <small class="pull-right">Fecha: <?= h($this->Time->format($planificacione->fecha, 'dd-MM-YYYY')) ?> - <?= h($this->Time->format($planificacione->hora, 'HH:mm:ss')) ?></small>
            </h2>
        </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-9 invoice-col">
            <b>Lugar:</b> <?= h($planificacione->cancha->nombre) ?><br/>
            <b>Estatus:</b> <?= h($planificacione->activo == 1 ? 'Activo' : 'Inactivo') ?><br/>
            <br/>
            <address>
                <b>Descripción:</b> <?= $this->Text->autoParagraph(h($planificacione->descripcion)) ?>
            </address>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-xs-9 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Trabajador</th>
                        <th>Cargo</th>
                        <th>Horas</th>
                        <th>Pago</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($planificacionDetalles as $detalle): ?>
                        <?php $total += $detalle->pago; ?>
                        <tr>
                            <td><?= $detalle->has('trabajadore') ? h($detalle->trabajadore->nombre . ' ' . $detalle->trabajadore->apellido) : '' ?></td>
                            <td><?= $detalle->has('cargo') ? h($detalle->cargo->cargo) : '' ?></td>
                            <td><?= h($this->Time->format($detalle->horas, 'HH:mm:ss')) ?></td>
                            <td><?= $this->Number->format($detalle->pago) ?></td>
                            <td><?= $this->Number->format($detalle->pago) ?></td>
                        </tr>   
                    <?php endforeach; ?>                    
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->
    
    <div class="row">
        <div class="col-xs-5">
            &nbsp;
        </div>
        
        <div class="col-xs-4">
            <p class="lead">Total</p>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Total:</th>
                        <td><?= $this->Number->format($total) ?></td>
                    </tr>
                </table>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-9">
            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
            <button class="btn btn-success pull-right"><i class="fa fa-anchor"></i> Generar JPEG</button>
            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>
        </div>
    </div>
</section><!-- /.content -->