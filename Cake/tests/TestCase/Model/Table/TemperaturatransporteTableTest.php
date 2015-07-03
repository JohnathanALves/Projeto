<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TemperaturatransporteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TemperaturatransporteTable Test Case
 */
class TemperaturatransporteTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.temperaturatransporte'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Temperaturatransporte') ? [] : ['className' => 'App\Model\Table\TemperaturatransporteTable'];        $this->Temperaturatransporte = TableRegistry::get('Temperaturatransporte', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Temperaturatransporte);

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
