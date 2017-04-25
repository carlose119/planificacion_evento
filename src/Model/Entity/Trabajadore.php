<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trabajadore Entity
 *
 * @property int $id
 * @property int $cargo_id
 * @property string $nombre
 * @property string $apellido
 * @property string $numero_identidad
 * @property string $telefono
 * @property string $email
 * @property string $direccion
 * @property bool $activo
 * @property bool $eliminado
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Cargo $cargo
 */
class Trabajadore extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    
    protected $_virtual = [
        'Datos',
    ];
    
    protected function _getDatos() {
        return $this->nombre . ' ' . $this->apellido . ' | '. $this->numero_identidad . ' | ' . $this->cargo->cargo;
    }

}
