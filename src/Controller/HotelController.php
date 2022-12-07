<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Hotel Controller
 *
 * @property \App\Model\Table\HotelTable $Hotel
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HotelController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $hotel = $this->paginate($this->Hotel);

        $this->set(compact('hotel'));
    }

    /**
     * View method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotel = $this->Hotel->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('hotel'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotel = $this->Hotel->newEmptyEntity();
        if ($this->request->is('post')) {
            $hotel = $this->Hotel->patchEntity($hotel, $this->request->getData());
            if ($this->Hotel->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $this->set(compact('hotel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotel = $this->Hotel->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotel = $this->Hotel->patchEntity($hotel, $this->request->getData());
            if ($this->Hotel->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $this->set(compact('hotel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotel = $this->Hotel->get($id);
        if ($this->Hotel->delete($hotel)) {
            $this->Flash->success(__('The hotel has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
