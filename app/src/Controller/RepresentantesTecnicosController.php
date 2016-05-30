<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RepresentantesTecnicos Controller
 *
 * @property \App\Model\Table\RepresentantesTecnicosTable $RepresentantesTecnicos
 */
class RepresentantesTecnicosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Municipios', 'Estados']
        ];
        $representantesTecnicos = $this->paginate($this->RepresentantesTecnicos);

        $this->set(compact('representantesTecnicos'));
        $this->set('_serialize', ['representantesTecnicos']);
    }

    /**
     * View method
     *
     * @param string|null $id Representantes Tecnico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $representantesTecnico = $this->RepresentantesTecnicos->get($id, [
            'contain' => ['Municipios', 'Estados']
        ]);

        $this->set('representantesTecnico', $representantesTecnico);
        $this->set('_serialize', ['representantesTecnico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $representantesTecnico = $this->RepresentantesTecnicos->newEntity();
        if ($this->request->is('post')) {
            $representantesTecnico = $this->RepresentantesTecnicos->patchEntity($representantesTecnico, $this->request->data);
            if ($this->RepresentantesTecnicos->save($representantesTecnico)) {
                $this->Flash->success(__('The representantes tecnico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The representantes tecnico could not be saved. Please, try again.'));
            }
        }
        $municipios = $this->RepresentantesTecnicos->Municipios->find('list', ['limit' => 200]);
        $estados = $this->RepresentantesTecnicos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('representantesTecnico', 'municipios', 'estados'));
        $this->set('_serialize', ['representantesTecnico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Representantes Tecnico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $representantesTecnico = $this->RepresentantesTecnicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $representantesTecnico = $this->RepresentantesTecnicos->patchEntity($representantesTecnico, $this->request->data);
            if ($this->RepresentantesTecnicos->save($representantesTecnico)) {
                $this->Flash->success(__('The representantes tecnico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The representantes tecnico could not be saved. Please, try again.'));
            }
        }
        $municipios = $this->RepresentantesTecnicos->Municipios->find('list', ['limit' => 200]);
        $estados = $this->RepresentantesTecnicos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('representantesTecnico', 'municipios', 'estados'));
        $this->set('_serialize', ['representantesTecnico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Representantes Tecnico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $representantesTecnico = $this->RepresentantesTecnicos->get($id);
        if ($this->RepresentantesTecnicos->delete($representantesTecnico)) {
            $this->Flash->success(__('The representantes tecnico has been deleted.'));
        } else {
            $this->Flash->error(__('The representantes tecnico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
