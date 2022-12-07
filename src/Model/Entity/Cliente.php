<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $idCliente
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property string $telefono
 * @property string $calle
 * @property string $colonia
 * @property string $cp
 * @property int $idHotel
 * @property string $regimenHotel
 * @property int $idSucursal
 * @property int $idVuelo
 * @property string $claseVuelo
 * @property int|null $estatus
 */
class Cliente extends Entity
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
        'apellidoPaterno' => true,
        'apellidoMaterno' => true,
        'telefono' => true,
        'calle' => true,
        'colonia' => true,
        'cp' => true,
        'idHotel' => true,
        'regimenHotel' => true,
        'idSucursal' => true,
        'idVuelo' => true,
        'claseVuelo' => true,
        'estatus' => true,
    ];
}
