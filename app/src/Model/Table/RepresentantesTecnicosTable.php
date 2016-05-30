<?php
namespace App\Model\Table;

use App\Model\Entity\RepresentantesTecnico;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RepresentantesTecnicos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Municipios
 * @property \Cake\ORM\Association\BelongsTo $Estados
 */
class RepresentantesTecnicosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('representantes_tecnicos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Municipios', [
            'foreignKey' => 'municipio_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('profissao', 'create')
            ->notEmpty('profissao');

        $validator
            ->requirePresence('reg_profissional', 'create')
            ->notEmpty('reg_profissional');

        $validator
            ->requirePresence('conselho', 'create')
            ->notEmpty('conselho');

        $validator
            ->date('data_nascimento')
            ->requirePresence('data_nascimento', 'create')
            ->notEmpty('data_nascimento');

        $validator
            ->requirePresence('logradouro', 'create')
            ->notEmpty('logradouro');

        $validator
            ->allowEmpty('complemento');

        $validator
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->requirePresence('celular', 'create')
            ->notEmpty('celular');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['municipio_id'], 'Municipios'));
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));
        return $rules;
    }
}
