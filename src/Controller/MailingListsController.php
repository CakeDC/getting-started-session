<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MailingLists Controller
 *
 * @property \App\Model\Table\MailingListsTable $MailingLists
 */
class MailingListsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mailingLists = $this->paginate($this->MailingLists);

        $this->set(compact('mailingLists'));
        $this->set('_serialize', ['mailingLists']);
    }

    /**
     * View method
     *
     * @param string|null $id Mailing List id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mailingList = $this->MailingLists->get($id, [
            'contain' => ['Campaigns', 'Users']
        ]);

        $this->set('mailingList', $mailingList);
        $this->set('_serialize', ['mailingList']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mailingList = $this->MailingLists->newEntity();
        if ($this->request->is('post')) {
            $mailingList = $this->MailingLists->patchEntity($mailingList, $this->request->getData());
            if ($this->MailingLists->save($mailingList)) {
                $this->Flash->success(__('The mailing list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mailing list could not be saved. Please, try again.'));
        }
        $campaigns = $this->MailingLists->Campaigns->find('list', ['limit' => 200]);
        $users = $this->MailingLists->Users->find('list', ['limit' => 200]);
        $this->set(compact('mailingList', 'campaigns', 'users'));
        $this->set('_serialize', ['mailingList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mailing List id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mailingList = $this->MailingLists->get($id, [
            'contain' => ['Campaigns', 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mailingList = $this->MailingLists->patchEntity($mailingList, $this->request->getData());
            if ($this->MailingLists->save($mailingList)) {
                $this->Flash->success(__('The mailing list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mailing list could not be saved. Please, try again.'));
        }
        $campaigns = $this->MailingLists->Campaigns->find('list', ['limit' => 200]);
        $users = $this->MailingLists->Users->find('list', ['limit' => 200]);
        $this->set(compact('mailingList', 'campaigns', 'users'));
        $this->set('_serialize', ['mailingList']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mailing List id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mailingList = $this->MailingLists->get($id);
        if ($this->MailingLists->delete($mailingList)) {
            $this->Flash->success(__('The mailing list has been deleted.'));
        } else {
            $this->Flash->error(__('The mailing list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
