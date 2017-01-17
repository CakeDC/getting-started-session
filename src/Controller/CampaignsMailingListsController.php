<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CampaignsMailingLists Controller
 *
 * @property \App\Model\Table\CampaignsMailingListsTable $CampaignsMailingLists
 */
class CampaignsMailingListsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campaigns', 'MailingLists']
        ];
        $campaignsMailingLists = $this->paginate($this->CampaignsMailingLists);

        $this->set(compact('campaignsMailingLists'));
        $this->set('_serialize', ['campaignsMailingLists']);
    }

    /**
     * View method
     *
     * @param string|null $id Campaigns Mailing List id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campaignsMailingList = $this->CampaignsMailingLists->get($id, [
            'contain' => ['Campaigns', 'MailingLists']
        ]);

        $this->set('campaignsMailingList', $campaignsMailingList);
        $this->set('_serialize', ['campaignsMailingList']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campaignsMailingList = $this->CampaignsMailingLists->newEntity();
        if ($this->request->is('post')) {
            $campaignsMailingList = $this->CampaignsMailingLists->patchEntity($campaignsMailingList, $this->request->data);
            if ($this->CampaignsMailingLists->save($campaignsMailingList)) {
                $this->Flash->success(__('The campaigns mailing list has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campaigns mailing list could not be saved. Please, try again.'));
            }
        }
        $campaigns = $this->CampaignsMailingLists->Campaigns->find('list', ['limit' => 200]);
        $mailingLists = $this->CampaignsMailingLists->MailingLists->find('list', ['limit' => 200]);
        $this->set(compact('campaignsMailingList', 'campaigns', 'mailingLists'));
        $this->set('_serialize', ['campaignsMailingList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Campaigns Mailing List id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campaignsMailingList = $this->CampaignsMailingLists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campaignsMailingList = $this->CampaignsMailingLists->patchEntity($campaignsMailingList, $this->request->data);
            if ($this->CampaignsMailingLists->save($campaignsMailingList)) {
                $this->Flash->success(__('The campaigns mailing list has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campaigns mailing list could not be saved. Please, try again.'));
            }
        }
        $campaigns = $this->CampaignsMailingLists->Campaigns->find('list', ['limit' => 200]);
        $mailingLists = $this->CampaignsMailingLists->MailingLists->find('list', ['limit' => 200]);
        $this->set(compact('campaignsMailingList', 'campaigns', 'mailingLists'));
        $this->set('_serialize', ['campaignsMailingList']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Campaigns Mailing List id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campaignsMailingList = $this->CampaignsMailingLists->get($id);
        if ($this->CampaignsMailingLists->delete($campaignsMailingList)) {
            $this->Flash->success(__('The campaigns mailing list has been deleted.'));
        } else {
            $this->Flash->error(__('The campaigns mailing list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
