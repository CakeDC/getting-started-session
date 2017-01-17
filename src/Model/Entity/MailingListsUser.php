<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MailingListsUser Entity
 *
 * @property int $id
 * @property int $mailing_list_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\MailingList $mailing_list
 */
class MailingListsUser extends Entity
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
