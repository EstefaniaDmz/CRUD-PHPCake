<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HotelFixture
 */
class HotelFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'hotel';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idHotel' => 1,
                'telefono' => '',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'calle' => 'Lorem ipsum dolor sit amet',
                'colonia' => 'Lorem ipsum dolor sit amet',
                'cp' => '',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
                'pais' => 'Lorem ipsum dolor sit amet',
                'numeroPlazas' => 1,
                'estatus' => 1,
            ],
        ];
        parent::init();
    }
}
