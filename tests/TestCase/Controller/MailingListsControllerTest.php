<?php
namespace App\Test\TestCase\Controller;

use App\Controller\MailingListsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\MailingListsController Test Case
 */
class MailingListsControllerTest extends IntegrationTestCase
{

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
        'app.mailing_lists_users',
        'app.campaigns_mailing_lists'
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

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
