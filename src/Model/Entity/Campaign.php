<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campaign Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $status
 * @property int $template_id
 *
 * @property \App\Model\Entity\Template $template
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\MailingList[] $mailing_lists
 */
class Campaign extends Entity
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
