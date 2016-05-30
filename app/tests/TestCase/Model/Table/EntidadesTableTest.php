<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntidadesTable Test Case
 */
class EntidadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntidadesTable
     */
    public $Entidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entidades',
        'app.municipios',
        'app.estados',
        'app.controle_acessos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Entidades') ? [] : ['className' => 'App\Model\Table\EntidadesTable'];
        $this->Entidades = TableRegistry::get('Entidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entidades);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
