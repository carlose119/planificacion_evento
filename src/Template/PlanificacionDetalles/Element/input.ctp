<?php
echo $this->Form->input('planificacion_id', ['value' => $planificacion_id, 'type' => 'hidden']);
echo $this->Form->input('trabajador_id', ['options' => $trabajadores, 'empty' => true]);
echo $this->Form->input('cargo_id', ['options' => $cargos, 'empty' => true]);
echo $this->Form->input('horas', ['empty' => true]);
echo $this->Form->input('pago');
?>