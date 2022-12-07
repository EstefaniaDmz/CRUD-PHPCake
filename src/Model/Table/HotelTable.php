<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotel Model
 *
 * @method \App\Model\Entity\Hotel newEmptyEntity()
 * @method \App\Model\Entity\Hotel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Hotel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hotel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hotel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Hotel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HotelTable extends Table
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

        $this->setTable('hotel');
        $this->setDisplayField('idHotel');
        $this->setPrimaryKey('idHotel');
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
            ->scalar('telefono')
            ->maxLength('telefono', 10)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

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
            ->scalar('ciudad')
            ->maxLength('ciudad', 50)
            ->requirePresence('ciudad', 'create')
            ->notEmptyString('ciudad');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 50)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 50)
            ->requirePresence('pais', 'create')
            ->notEmptyString('pais');

        $validator
            ->integer('numeroPlazas')
            ->requirePresence('numeroPlazas', 'create')
            ->notEmptyString('numeroPlazas');

        $validator
            ->integer('estatus')
            ->notEmptyString('estatus');

        return $validator;
    }
}
