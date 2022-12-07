<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vuelo Model
 *
 * @method \App\Model\Entity\Vuelo newEmptyEntity()
 * @method \App\Model\Entity\Vuelo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vuelo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vuelo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vuelo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vuelo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vuelo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vuelo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vuelo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vuelo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vuelo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vuelo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vuelo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VueloTable extends Table
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

        $this->setTable('vuelo');
        $this->setDisplayField('idVuelo');
        $this->setPrimaryKey('idVuelo');
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
            ->scalar('ciudadOrigen')
            ->maxLength('ciudadOrigen', 50)
            ->requirePresence('ciudadOrigen', 'create')
            ->notEmptyString('ciudadOrigen');

        $validator
            ->scalar('estadoOrigen')
            ->maxLength('estadoOrigen', 50)
            ->requirePresence('estadoOrigen', 'create')
            ->notEmptyString('estadoOrigen');

        $validator
            ->scalar('paisOrigen')
            ->maxLength('paisOrigen', 50)
            ->requirePresence('paisOrigen', 'create')
            ->notEmptyString('paisOrigen');

        $validator
            ->scalar('ciudadDestino')
            ->maxLength('ciudadDestino', 50)
            ->requirePresence('ciudadDestino', 'create')
            ->notEmptyString('ciudadDestino');

        $validator
            ->scalar('estadoDestino')
            ->maxLength('estadoDestino', 50)
            ->requirePresence('estadoDestino', 'create')
            ->notEmptyString('estadoDestino');

        $validator
            ->scalar('paisDestino')
            ->maxLength('paisDestino', 50)
            ->requirePresence('paisDestino', 'create')
            ->notEmptyString('paisDestino');

        $validator
            ->integer('plazasTotales')
            ->requirePresence('plazasTotales', 'create')
            ->notEmptyString('plazasTotales');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->time('hora')
            ->requirePresence('hora', 'create')
            ->notEmptyTime('hora');

        $validator
            ->integer('estatus')
            ->allowEmptyString('estatus');

        return $validator;
    }
}
