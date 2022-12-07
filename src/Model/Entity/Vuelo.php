<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vuelo Entity
 *
 * @property int $idVuelo
 * @property string $ciudadOrigen
 * @property string $estadoOrigen
 * @property string $paisOrigen
 * @property string $ciudadDestino
 * @property string $estadoDestino
 * @property string $paisDestino
 * @property int $plazasTotales
 * @property \Cake\I18n\FrozenDate $fecha
 * @property \Cake\I18n\Time $hora
 * @property int|null $estatus
 */
class Vuelo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'ciudadOrigen' => true,
        'estadoOrigen' => true,
        'paisOrigen' => true,
        'ciudadDestino' => true,
        'estadoDestino' => true,
        'paisDestino' => true,
        'plazasTotales' => true,
        'fecha' => true,
        'hora' => true,
        'estatus' => true,
    ];
}
