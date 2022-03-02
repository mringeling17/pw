<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChargeContract Controller
 *
 * @property \App\Model\Table\ChargeContractTable $ChargeContract
 *
 * @method \App\Model\Entity\ChargeContract[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChargeContractController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Charges', 'Contracts'],
        ];
        $chargeContract = $this->paginate($this->ChargeContract);

        $this->set(compact('chargeContract'));
    }

    /**
     * View method
     *
     * @param string|null $id Charge Contract id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chargeContract = $this->ChargeContract->get($id, [
            'contain' => ['Charges', 'Contracts'],
        ]);

        $this->set('chargeContract', $chargeContract);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chargeContract = $this->ChargeContract->newEntity();
        if ($this->request->is('post')) {
            $chargeContract = $this->ChargeContract->patchEntity($chargeContract, $this->request->getData());
            if ($this->ChargeContract->save($chargeContract)) {
                $this->Flash->success(__('The charge contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The charge contract could not be saved. Please, try again.'));
        }
        $charges = $this->ChargeContract->Charges->find('list', ['limit' => 200]);
        $contracts = $this->ChargeContract->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('chargeContract', 'charges', 'contracts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Charge Contract id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chargeContract = $this->ChargeContract->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chargeContract = $this->ChargeContract->patchEntity($chargeContract, $this->request->getData());
            if ($this->ChargeContract->save($chargeContract)) {
                $this->Flash->success(__('The charge contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The charge contract could not be saved. Please, try again.'));
        }
        $charges = $this->ChargeContract->Charges->find('list', ['limit' => 200]);
        $contracts = $this->ChargeContract->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('chargeContract', 'charges', 'contracts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Charge Contract id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chargeContract = $this->ChargeContract->get($id);
        if ($this->ChargeContract->delete($chargeContract)) {
            $this->Flash->success(__('The charge contract has been deleted.'));
        } else {
            $this->Flash->error(__('The charge contract could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
