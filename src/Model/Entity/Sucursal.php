<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sucursal Entity
 *
 * @property int $idSucursal
 * @property string $nombre
 * @property string $telefono
 * @property string $calle
 * @property string $colonia
 * @property string $cp
 * @property int $numeroPlazas
 * @property int|null $estatus
 */
class Sucursal extends Entity
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
        'nombre' => true,
        'telefono' => true,
        'calle' => true,
        'colonia' => true,
        'cp' => true,
        'numeroPlazas' => true,
        'estatus' => true,
    ];
}
