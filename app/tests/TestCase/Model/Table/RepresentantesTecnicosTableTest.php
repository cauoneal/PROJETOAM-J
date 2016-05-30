<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RepresentantesTecnicosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RepresentantesTecnicosTable Test Case
 */
class RepresentantesTecnicosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RepresentantesTecnicosTable
     */
    public $RepresentantesTecnicos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.representantes_tecnicos',
        'app.municipios',
        'app.estados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RepresentantesTecnicos') ? [] : ['className' => 'App\Model\Table\RepresentantesTecnicosTable'];
        $this->RepresentantesTecnicos = TableRegistry::get('RepresentantesTecnicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RepresentantesTecnicos);

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
