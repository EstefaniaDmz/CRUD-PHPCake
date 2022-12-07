<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SucursalFixture
 */
class SucursalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sucursal';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idSucursal' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'telefono' => '',
                'calle' => 'Lorem ipsum dolor sit amet',
                'colonia' => 'Lorem ipsum dolor sit amet',
                'cp' => '',
                'numeroPlazas' => 1,
                'estatus' => 1,
            ],
        ];
        parent::init();
    }
}
