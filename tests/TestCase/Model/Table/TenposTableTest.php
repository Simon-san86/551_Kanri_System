<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TenposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TenposTable Test Case
 */
class TenposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TenposTable
     */
    public $Tenpos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tenpos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tenpos') ? [] : ['className' => 'App\Model\Table\TenposTable'];
        $this->Tenpos = TableRegistry::get('Tenpos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tenpos);

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
