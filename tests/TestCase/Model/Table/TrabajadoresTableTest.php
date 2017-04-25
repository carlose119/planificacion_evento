<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrabajadoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrabajadoresTable Test Case
 */
class TrabajadoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrabajadoresTable
     */
    public $Trabajadores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trabajadores',
        'app.cargos',
        'app.planificacion_detalles',
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
        $config = TableRegistry::exists('Trabajadores') ? [] : ['className' => 'App\Model\Table\TrabajadoresTable'];
        $this->Trabajadores = TableRegistry::get('Trabajadores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trabajadores);

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
