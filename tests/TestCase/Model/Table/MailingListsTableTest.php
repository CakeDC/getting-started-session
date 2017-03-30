<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailingListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailingListsTable Test Case
 */
class MailingListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MailingListsTable
     */
    public $MailingLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mailing_lists',
        'app.campaigns',
        'app.templates',
        'app.logs',
        'app.users',
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
        $config = TableRegistry::exists('MailingLists') ? [] : ['className' => 'App\Model\Table\MailingListsTable'];
        $this->MailingLists = TableRegistry::get('MailingLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MailingLists);

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
