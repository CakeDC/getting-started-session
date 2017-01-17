<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampaignsMailingListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampaignsMailingListsTable Test Case
 */
class CampaignsMailingListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CampaignsMailingListsTable
     */
    public $CampaignsMailingLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.campaigns_mailing_lists',
        'app.campaigns',
        'app.templates',
        'app.logs',
        'app.mailing_lists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CampaignsMailingLists') ? [] : ['className' => 'App\Model\Table\CampaignsMailingListsTable'];
        $this->CampaignsMailingLists = TableRegistry::get('CampaignsMailingLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CampaignsMailingLists);

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
