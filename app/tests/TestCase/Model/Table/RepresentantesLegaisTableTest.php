<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RepresentantesLegaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RepresentantesLegaisTable Test Case
 */
class RepresentantesLegaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RepresentantesLegaisTable
     */
    public $RepresentantesLegais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.representantes_legais',
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
        $config = TableRegistry::exists('RepresentantesLegais') ? [] : ['className' => 'App\Model\Table\RepresentantesLegaisTable'];
        $this->RepresentantesLegais = TableRegistry::get('RepresentantesLegais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RepresentantesLegais);

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
