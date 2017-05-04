<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CanchasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CanchasTable Test Case
 */
class CanchasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CanchasTable
     */
    public $Canchas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canchas',
        'app.planificaciones',
        'app.planificacion_detalles',
        'app.trabajadores',
        'app.cargos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Canchas') ? [] : ['className' => 'App\Model\Table\CanchasTable'];
        $this->Canchas = TableRegistry::get('Canchas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Canchas);

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
