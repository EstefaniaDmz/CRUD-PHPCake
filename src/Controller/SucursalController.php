<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sucursal Controller
 *
 * @property \App\Model\Table\SucursalTable $Sucursal
 * @method \App\Model\Entity\Sucursal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SucursalController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $sucursal = $this->paginate($this->Sucursal);

        $this->set(compact('sucursal'));
    }

    /**
     * View method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sucursal = $this->Sucursal->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sucursal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sucursal = $this->Sucursal->newEmptyEntity();
        if ($this->request->is('post')) {
            $sucursal = $this->Sucursal->patchEntity($sucursal, $this->request->getData());
            if ($this->Sucursal->save($sucursal)) {
                $this->Flash->success(__('The sucursal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sucursal could not be saved. Please, try again.'));
        }
        $this->set(compact('sucursal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sucursal = $this->Sucursal->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucursal = $this->Sucursal->patchEntity($sucursal, $this->request->getData());
            if ($this->Sucursal->save($sucursal)) {
                $this->Flash->success(__('The sucursal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sucursal could not be saved. Please, try again.'));
        }
        $this->set(compact('sucursal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sucursal = $this->Sucursal->get($id);
        if ($this->Sucursal->delete($sucursal)) {
            $this->Flash->success(__('The sucursal has been deleted.'));
        } else {
            $this->Flash->error(__('The sucursal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
