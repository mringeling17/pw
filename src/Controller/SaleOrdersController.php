<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SaleOrders Controller
 *
 * @property \App\Model\Table\SaleOrdersTable $SaleOrders
 *
 * @method \App\Model\Entity\SaleOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SaleOrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contracts'],
        ];
        $saleOrders = $this->paginate($this->SaleOrders);

        $this->set(compact('saleOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Sale Order id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleOrder = $this->SaleOrders->get($id, [
            'contain' => ['Contracts'],
        ]);

        $this->set('saleOrder', $saleOrder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleOrder = $this->SaleOrders->newEntity();
        if ($this->request->is('post')) {
            $saleOrder = $this->SaleOrders->patchEntity($saleOrder, $this->request->getData());
            if ($this->SaleOrders->save($saleOrder)) {
                $this->Flash->success(__('The sale order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale order could not be saved. Please, try again.'));
        }
        $contracts = $this->SaleOrders->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('saleOrder', 'contracts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleOrder = $this->SaleOrders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleOrder = $this->SaleOrders->patchEntity($saleOrder, $this->request->getData());
            if ($this->SaleOrders->save($saleOrder)) {
                $this->Flash->success(__('The sale order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale order could not be saved. Please, try again.'));
        }
        $contracts = $this->SaleOrders->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('saleOrder', 'contracts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleOrder = $this->SaleOrders->get($id);
        if ($this->SaleOrders->delete($saleOrder)) {
            $this->Flash->success(__('The sale order has been deleted.'));
        } else {
            $this->Flash->error(__('The sale order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
