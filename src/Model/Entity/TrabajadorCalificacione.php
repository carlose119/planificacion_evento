<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrabajadorCalificacione Entity
 *
 * @property int $id
 * @property int $planificacion_id
 * @property int $trabajador_id
 * @property int $calificacion
 * @property string $comentarios
 * @property bool $eliminado
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Planificacion $planificacion
 * @property \App\Model\Entity\Trabajador $trabajador
 */
class TrabajadorCalificacione extends Entity
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
