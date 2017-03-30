<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\CampaignsTable;

/**
 * Campaigns Controller
 *
 * @property \App\Model\Table\CampaignsTable $Campaigns
 */
class CampaignsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Templates']
        ];
        $campaigns = $this->paginate($this->Campaigns);

        $this->set(compact('campaigns'));
        $this->set('_serialize', ['campaigns']);
    }

    /**
     * View method
     *
     * @param string|null $id Campaign id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campaign = $this->Campaigns->get($id, [
            'contain' => ['Templates', 'MailingLists', 'Logs']
        ]);

        $this->set('campaign', $campaign);
        $this->set('_serialize', ['campaign']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campaign = $this->Campaigns->newEntity();
        if ($this->request->is('post')) {
            $campaign = $this->Campaigns->patchEntity($campaign, $this->request->getData());
            if ($this->Campaigns->save($campaign)) {
                $this->Flash->success(__('The campaign has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campaign could not be saved. Please, try again.'));
        }
        $templates = $this->Campaigns->Templates->find('list', ['limit' => 200]);
        $mailingLists = $this->Campaigns->MailingLists->find('list', ['limit' => 200]);
        $this->set(compact('campaign', 'templates', 'mailingLists'));
        $this->set('_serialize', ['campaign']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Campaign id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campaign = $this->Campaigns->get($id, [
            'contain' => ['MailingLists']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campaign = $this->Campaigns->patchEntity($campaign, $this->request->getData());
            if ($this->Campaigns->save($campaign)) {
                $this->Flash->success(__('The campaign has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campaign could not be saved. Please, try again.'));
        }
        $templates = $this->Campaigns->Templates->find('list', ['limit' => 200]);
        $mailingLists = $this->Campaigns->MailingLists->find('list', ['limit' => 200]);
        $this->set(compact('campaign', 'templates', 'mailingLists'));
        $this->set('_serialize', ['campaign']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Campaign id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campaign = $this->Campaigns->get($id);
        if ($this->Campaigns->delete($campaign)) {
            $this->Flash->success(__('The campaign has been deleted.'));
        } else {
            $this->Flash->error(__('The campaign could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function queryExample1()
    {
        $query = $this->Campaigns->find()
		    ->select(['Campaigns.name', 'Campaigns.status'])
		    ->where(['Campaigns.status !=' => 'new'])
		    ->order(['Campaigns.name' => 'asc'])
		    ->limit(10);
        debug($query->toArray());
        $this->render(false);
    }

    public function queryContainExample()
    {
        $query = $this->Campaigns->find()
            ->contain('MailingLists.Users')
            ->where(['Campaigns.status' => 'completed']);
        debug($query->toArray());
        $this->render(false);
    }

    public function dashboard()
    {
        $campaigns = $this->Campaigns->find()
            ->where([
                'Campaigns.status' => CampaignsTable::STATUS_NEW,
                ]);
        $this->set(compact('campaigns'));
    }

    public function send($id = null)
    {
        if (!$this->request->is('post')) {
            throw new \Cake\Network\Exception\MethodNotAllowedException();
        }
        if (!$this->Campaigns->send($id)) {
            $this->Flash->error(__('Send campaign failed'));
        } else {
            $this->Flash->success(__('Send campaign success!'));
        }
        return $this->redirect(['action' => 'dashboard']);
    }
}
