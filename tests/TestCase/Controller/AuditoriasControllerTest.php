<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AuditoriasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AuditoriasController Test Case
 */
class AuditoriasControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.auditorias',
        'app.tablas',
        'app.users',
        'app.groups'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
