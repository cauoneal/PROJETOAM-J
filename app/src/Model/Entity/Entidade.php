<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entidade Entity.
 *
 * @property int $id
 * @property string $cnpj
 * @property string $nome
 * @property string $ativeconomica
 * @property string $logradouro
 * @property string $complemento
 * @property string $bairro
 * @property string $numero
 * @property string $instfinanceira
 * @property \Cake\I18n\Time $data_abertura
 * @property string $cep
 * @property int $municipio_id
 * @property \App\Model\Entity\Municipio $municipio
 * @property string $telefone
 * @property string $codigo
 * @property string $agencia
 * @property string $conta
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $estado_id
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\ControleAcesso[] $controle_acessos
 */
class Entidade extends Entity
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
