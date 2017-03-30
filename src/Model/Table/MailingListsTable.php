<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MailingLists Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Campaigns
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\MailingList get($primaryKey, $options = [])
 * @method \App\Model\Entity\MailingList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MailingList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MailingList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MailingList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MailingList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MailingList findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MailingListsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mailing_lists');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Campaigns', [
            'foreignKey' => 'mailing_list_id',
            'targetForeignKey' => 'campaign_id',
            'joinTable' => 'campaigns_mailing_lists'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'mailing_list_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'mailing_lists_users'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
