<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VueloFixture
 */
class VueloFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'vuelo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idVuelo' => 1,
                'ciudadOrigen' => 'Lorem ipsum dolor sit amet',
                'estadoOrigen' => 'Lorem ipsum dolor sit amet',
                'paisOrigen' => 'Lorem ipsum dolor sit amet',
                'ciudadDestino' => 'Lorem ipsum dolor sit amet',
                'estadoDestino' => 'Lorem ipsum dolor sit amet',
                'paisDestino' => 'Lorem ipsum dolor sit amet',
                'plazasTotales' => 1,
                'fecha' => '2022-12-07',
                'hora' => '00:12:35',
                'estatus' => 1,
            ],
        ];
        parent::init();
    }
}
