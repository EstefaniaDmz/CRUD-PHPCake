<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity
 *
 * @property int $idHotel
 * @property string $telefono
 * @property string $nombre
 * @property string $calle
 * @property string $colonia
 * @property string $cp
 * @property string $ciudad
 * @property string $estado
 * @property string $pais
 * @property int $numeroPlazas
 * @property int $estatus
 */
class Hotel extends Entity
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
        'telefono' => true,
        'nombre' => true,
        'calle' => true,
        'colonia' => true,
        'cp' => true,
        'ciudad' => true,
        'estado' => true,
        'pais' => true,
        'numeroPlazas' => true,
        'estatus' => true,
    ];
}
