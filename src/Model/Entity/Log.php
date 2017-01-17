<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Log Entity
 *
 * @property int $id
 * @property int $campaign_id
 * @property int $user_id
 * @property string $subject
 * @property string $body
 * @property string $reference
 * @property string $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Campaign $campaign
 * @property \App\Model\Entity\User $user
 */
class Log extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
