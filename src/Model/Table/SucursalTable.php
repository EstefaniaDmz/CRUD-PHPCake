<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sucursal Model
 *
 * @method \App\Model\Entity\Sucursal newEmptyEntity()
 * @method \App\Model\Entity\Sucursal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sucursal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sucursal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sucursal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sucursal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sucursal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sucursal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sucursal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sucursal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sucursal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SucursalTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sucursal');
        $this->setDisplayField('idSucursal');
        $this->setPrimaryKey('idSucursal');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 10)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('calle')
            ->maxLength('calle', 50)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->scalar('colonia')
            ->maxLength('colonia', 50)
            ->requirePresence('colonia', 'create')
            ->notEmptyString('colonia');

        $validator
            ->scalar('cp')
            ->maxLength('cp', 5)
            ->requirePresence('cp', 'create')
            ->notEmptyString('cp');

        $validator
            ->integer('numeroPlazas')
            ->requirePresence('numeroPlazas', 'create')
            ->notEmptyString('numeroPlazas');

        $validator
            ->integer('estatus')
            ->allowEmptyString('estatus');

        return $validator;
    }
}
