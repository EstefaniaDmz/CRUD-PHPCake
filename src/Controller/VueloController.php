<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vuelo Controller
 *
 * @property \App\Model\Table\VueloTable $Vuelo
 * @method \App\Model\Entity\Vuelo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VueloController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $vuelo = $this->paginate($this->Vuelo);

        $this->set(compact('vuelo'));
    }

    /**
     * View method
     *
     * @param string|null $id Vuelo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vuelo = $this->Vuelo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('vuelo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vuelo = $this->Vuelo->newEmptyEntity();
        if ($this->request->is('post')) {
            $vuelo = $this->Vuelo->patchEntity($vuelo, $this->request->getData());
            if ($this->Vuelo->save($vuelo)) {
                $this->Flash->success(__('The vuelo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vuelo could not be saved. Please, try again.'));
        }
        $this->set(compact('vuelo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vuelo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vuelo = $this->Vuelo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vuelo = $this->Vuelo->patchEntity($vuelo, $this->request->getData());
            if ($this->Vuelo->save($vuelo)) {
                $this->Flash->success(__('The vuelo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vuelo could not be saved. Please, try again.'));
        }
        $this->set(compact('vuelo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vuelo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vuelo = $this->Vuelo->get($id);
        if ($this->Vuelo->delete($vuelo)) {
            $this->Flash->success(__('The vuelo has been deleted.'));
        } else {
            $this->Flash->error(__('The vuelo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
