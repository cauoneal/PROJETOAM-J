<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RepresentantesTecnico Entity.
 *
 * @property int $id
 * @property string $cpf
 * @property string $nome
 * @property string $profissao
 * @property string $reg_profissional
 * @property string $conselho
 * @property \Cake\I18n\Time $data_nascimento
 * @property string $logradouro
 * @property string $complemento
 * @property string $bairro
 * @property string $numero
 * @property string $cep
 * @property int $municipio_id
 * @property \App\Model\Entity\Municipio $municipio
 * @property int $estado_id
 * @property \App\Model\Entity\Estado $estado
 * @property string $email
 * @property string $telefone
 * @property string $celular
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class RepresentantesTecnico extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
