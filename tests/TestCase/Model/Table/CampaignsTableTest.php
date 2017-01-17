<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampaignsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampaignsTable Test Case
 */
class CampaignsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CampaignsTable
     */
    public $Campaigns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.campaigns',
        'app.templates',
        'app.logs',
        'app.mailing_lists',
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
        $config = TableRegistry::exists('Campaigns') ? [] : ['className' => 'App\Model\Table\CampaignsTable'];
        $this->Campaigns = TableRegistry::get('Campaigns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Campaigns);

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
