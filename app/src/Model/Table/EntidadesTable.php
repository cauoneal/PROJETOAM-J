<?php
namespace App\Model\Table;

use App\Model\Entity\Entidade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entidades Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Municipios
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\HasMany $Vinculacoes
 */
class EntidadesTable extends Table
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

        $this->table('entidades');
        $this->displayField('nome');
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
        $this->hasMany('Vinculacoes', [
            'foreignKey' => 'entidade_id'
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
            ->requirePresence('cnpj', 'create')
            ->notEmpty('cnpj');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('ativeconomica', 'create')
            ->notEmpty('ativeconomica');

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
            ->requirePresence('instfinanceira', 'create')
            ->notEmpty('instfinanceira');

        $validator
            ->date('data_abertura')
            ->requirePresence('data_abertura', 'create')
            ->notEmpty('data_abertura');

        $validator
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo');

        $validator
            ->requirePresence('agencia', 'create')
            ->notEmpty('agencia');

        $validator
            ->requirePresence('conta', 'create')
            ->notEmpty('conta');

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
        $rules->add($rules->existsIn(['municipio_id'], 'Municipios'));
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));
        return $rules;
    }
}
