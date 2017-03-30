<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailingListsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailingListsUsersTable Test Case
 */
class MailingListsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MailingListsUsersTable
     */
    public $MailingListsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mailing_lists_users',
        'app.mailing_lists',
        'app.campaigns',
        'app.templates',
        'app.logs',
        'app.users',
        'app.campaigns_mailing_lists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MailingListsUsers') ? [] : ['className' => 'App\Model\Table\MailingListsUsersTable'];
        $this->MailingListsUsers = TableRegistry::get('MailingListsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MailingListsUsers);

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
