<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChargeContractTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChargeContractTable Test Case
 */
class ChargeContractTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChargeContractTable
     */
    public $ChargeContract;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ChargeContract',
        'app.Charges',
        'app.Contracts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ChargeContract') ? [] : ['className' => ChargeContractTable::class];
        $this->ChargeContract = TableRegistry::getTableLocator()->get('ChargeContract', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChargeContract);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
