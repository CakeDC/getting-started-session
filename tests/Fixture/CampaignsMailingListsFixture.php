<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampaignsMailingListsFixture
 *
 */
class CampaignsMailingListsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'campaign_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'mailing_list_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_campaigns_lists_campaigns1_idx' => ['type' => 'index', 'columns' => ['campaign_id'], 'length' => []],
            'fk_campaigns_lists_lists1_idx' => ['type' => 'index', 'columns' => ['mailing_list_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_campaigns_lists_campaigns1' => ['type' => 'foreign', 'columns' => ['campaign_id'], 'references' => ['campaigns', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_campaigns_lists_lists1' => ['type' => 'foreign', 'columns' => ['mailing_list_id'], 'references' => ['mailing_lists', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'campaign_id' => 1,
            'mailing_list_id' => 1
        ],
    ];
}
