<?php
echo $this->Form->input('group_id', ['options' => $groups]);
echo $this->Form->input('email');
echo $this->Form->input('username');
echo $this->Form->input('password', ['value' => '']);
echo $this->Form->input('nombre');
echo $this->Form->input('apellido');
echo $this->Form->input('activo');
?>