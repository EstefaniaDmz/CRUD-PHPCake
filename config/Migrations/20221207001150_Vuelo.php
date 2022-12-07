<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Vuelo extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up()
    {
        $this->table('cliente', ['id' => false, 'primary_key' => ['idCliente']])
            ->addColumn('idCliente', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoPaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoMaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('telefono', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('colonia', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('cp', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('idHotel', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('regimenHotel', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('idSucursal', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idVuelo', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('claseVuelo', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idVuelo',
                ]
            )
            ->addIndex(
                [
                    'idSucursal',
                ]
            )
            ->addIndex(
                [
                    'idHotel',
                ]
            )
            ->create();

        $this->table('hotel', ['id' => false, 'primary_key' => ['idHotel']])
            ->addColumn('idHotel', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('telefono', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('colonia', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('cp', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('ciudad', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estado', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('pais', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('numeroPlazas', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('sucursal', ['id' => false, 'primary_key' => ['idSucursal']])
            ->addColumn('idSucursal', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('telefono', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('colonia', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('cp', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('numeroPlazas', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('usuario', ['id' => false, 'primary_key' => ['idUsuario']])
            ->addColumn('idUsuario', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoPaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoMaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('correo', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('clave', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'string', [
                'default' => 'b\'1',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('vuelo', ['id' => false, 'primary_key' => ['idVuelo']])
            ->addColumn('idVuelo', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('ciudadOrigen', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estadoOrigen', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('paisOrigen', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('ciudadDestino', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estadoDestino', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('paisDestino', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('plazasTotales', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fecha', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('hora', 'time', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('cliente')
            ->addForeignKey(
                'idVuelo',
                'vuelo',
                'idVuelo',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'idSucursal',
                'sucursal',
                'idSucursal',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'idHotel',
                'hotel',
                'idHotel',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down()
    {
        $this->table('cliente')
            ->dropForeignKey(
                'idVuelo'
            )
            ->dropForeignKey(
                'idSucursal'
            )
            ->dropForeignKey(
                'idHotel'
            )->save();

        $this->table('cliente')->drop()->save();
        $this->table('hotel')->drop()->save();
        $this->table('sucursal')->drop()->save();
        $this->table('usuario')->drop()->save();
        $this->table('vuelo')->drop()->save();
    }
}
