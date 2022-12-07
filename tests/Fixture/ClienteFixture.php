<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClienteFixture
 */
class ClienteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cliente';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idCliente' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'telefono' => '',
                'calle' => 'Lorem ipsum dolor sit amet',
                'colonia' => 'Lorem ipsum dolor sit amet',
                'cp' => '',
                'idHotel' => 1,
                'regimenHotel' => 'Lorem ipsum dolor sit amet',
                'idSucursal' => 1,
                'idVuelo' => 1,
                'claseVuelo' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
            ],
        ];
        parent::init();
    }
}
