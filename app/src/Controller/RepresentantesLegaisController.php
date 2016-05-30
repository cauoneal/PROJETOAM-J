<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RepresentantesLegais Controller
 *
 * @property \App\Model\Table\RepresentantesLegaisTable $RepresentantesLegais
 */
class RepresentantesLegaisController extends AppController
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
        $representantesLegais = $this->paginate($this->RepresentantesLegais);

        $this->set(compact('representantesLegais'));
        $this->set('_serialize', ['representantesLegais']);
    }

    /**
     * View method
     *
     * @param string|null $id Representantes Legai id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $representantesLegai = $this->RepresentantesLegais->get($id, [
            'contain' => ['Municipios', 'Estados']
        ]);

        $this->set('representantesLegai', $representantesLegai);
        $this->set('_serialize', ['representantesLegai']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $representantesLegai = $this->RepresentantesLegais->newEntity();
        if ($this->request->is('post')) {
            $representantesLegai = $this->RepresentantesLegais->patchEntity($representantesLegai, $this->request->data);
            if ($this->RepresentantesLegais->save($representantesLegai)) {
                $this->Flash->success(__('The representantes legai has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The representantes legai could not be saved. Please, try again.'));
            }
        }
        $municipios = $this->RepresentantesLegais->Municipios->find('list', ['limit' => 200]);
        $estados = $this->RepresentantesLegais->Estados->find('list', ['limit' => 200]);
        $this->set(compact('representantesLegai', 'municipios', 'estados'));
        $this->set('_serialize', ['representantesLegai']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Representantes Legai id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $representantesLegai = $this->RepresentantesLegais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $representantesLegai = $this->RepresentantesLegais->patchEntity($representantesLegai, $this->request->data);
            if ($this->RepresentantesLegais->save($representantesLegai)) {
                $this->Flash->success(__('The representantes legai has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The representantes legai could not be saved. Please, try again.'));
            }
        }
        $municipios = $this->RepresentantesLegais->Municipios->find('list', ['limit' => 200]);
        $estados = $this->RepresentantesLegais->Estados->find('list', ['limit' => 200]);
        $this->set(compact('representantesLegai', 'municipios', 'estados'));
        $this->set('_serialize', ['representantesLegai']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Representantes Legai id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $representantesLegai = $this->RepresentantesLegais->get($id);
        if ($this->RepresentantesLegais->delete($representantesLegai)) {
            $this->Flash->success(__('The representantes legai has been deleted.'));
        } else {
            $this->Flash->error(__('The representantes legai could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
