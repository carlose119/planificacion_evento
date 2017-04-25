<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanificacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanificacionesTable Test Case
 */
class PlanificacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanificacionesTable
     */
    public $Planificaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.planificaciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Planificaciones') ? [] : ['className' => 'App\Model\Table\PlanificacionesTable'];
        $this->Planificaciones = TableRegistry::get('Planificaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Planificaciones);

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
}
