<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TemplatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TemplatesTable Test Case
 */
class TemplatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TemplatesTable
     */
    public $Templates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.templates',
        'app.campaigns',
        'app.logs',
        'app.users',
        'app.mailing_lists',
        'app.campaigns_mailing_lists',
        'app.mailing_lists_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Templates') ? [] : ['className' => 'App\Model\Table\TemplatesTable'];
        $this->Templates = TableRegistry::get('Templates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Templates);

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
