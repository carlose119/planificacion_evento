<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Planificacione Entity
 *
 * @property int $id
 * @property string $evento
 * @property string $lugar
 * @property \Cake\I18n\Time $fecha
 * @property \Cake\I18n\Time $hora
 * @property string $descripcion
 * @property bool $activo
 * @property bool $eliminado
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Planificacione extends Entity
{

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
}
