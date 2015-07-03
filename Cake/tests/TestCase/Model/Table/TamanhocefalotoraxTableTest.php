<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TamanhocefalotoraxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TamanhocefalotoraxTable Test Case
 */
class TamanhocefalotoraxTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tamanhocefalotorax'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tamanhocefalotorax') ? [] : ['className' => 'App\Model\Table\TamanhocefalotoraxTable'];        $this->Tamanhocefalotorax = TableRegistry::get('Tamanhocefalotorax', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tamanhocefalotorax);

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
