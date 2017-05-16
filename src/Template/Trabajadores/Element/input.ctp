<?php
echo $this->Form->input('cargo_id', ['options' => $cargos, 'empty' => true]);
echo $this->Form->input('nombre');
echo $this->Form->input('apellido');
echo $this->Form->input('numero_identidad');
echo $this->Form->input('telefono');
echo $this->Form->input('email');
echo $this->Form->input('direccion');
echo $this->Form->input('canchas._ids', ['options' => $canchas, 'label' => 'Canchas Cercanas','type'=> 'multicheckbox', 'required' => true]);
echo $this->Form->input('activo');
?>