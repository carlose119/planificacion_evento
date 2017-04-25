<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanificacionDetallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanificacionDetallesTable Test Case
 */
class PlanificacionDetallesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanificacionDetallesTable
     */
    public $PlanificacionDetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.planificacion_detalles',
        'app.planificacions',
        'app.trabajadors',
        'app.cargos',
        'app.trabajadores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PlanificacionDetalles') ? [] : ['className' => 'App\Model\Table\PlanificacionDetallesTable'];
        $this->PlanificacionDetalles = TableRegistry::get('PlanificacionDetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlanificacionDetalles);

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
