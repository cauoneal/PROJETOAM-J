<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entidades Controller
 *
 * @property \App\Model\Table\EntidadesTable $Entidades
 */
class EntidadesController extends AppController
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
        $entidades = $this->paginate($this->Entidades);

        $this->set(compact('entidades'));
        $this->set('_serialize', ['entidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Entidade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entidade = $this->Entidades->get($id, [
            'contain' => ['Municipios', 'Estados' ]
        ]);

        $this->set('entidade', $entidade);
        $this->set('_serialize', ['entidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entidade = $this->Entidades->newEntity();
        if ($this->request->is('post')) {
            $entidade = $this->Entidades->patchEntity($entidade, $this->request->data);
            if ($this->Entidades->save($entidade)) {
                $this->Flash->success(__('Entidade adicionada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A Entidade não pode ser adicionada. Por favor tente novamente!'));
            }
        }
        $this->Entidades->Municipios->displayField('nome');
        $municipios = $this->Entidades->Municipios->find('list', ['limit' => 200]);
        $this->Entidades->Estados->displayField('uf');
        $estados = $this->Entidades->Estados->find('list', ['limit' => 200]);
        $this->set(compact('entidade', 'municipios', 'estados'));
        $this->set('_serialize', ['entidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entidade = $this->Entidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entidade = $this->Entidades->patchEntity($entidade, $this->request->data);
            if ($this->Entidades->save($entidade)) {
                $this->Flash->success(__('Entidade editada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A Entidade não pode ser editada'));
            }
        }
        $this->Entidades->Municipios->displayField('nome');
        $municipios = $this->Entidades->Municipios->find('list', ['limit' => 200]);
        $this->Entidades->Estados->displayField('uf');
        $estados = $this->Entidades->Estados->find('list', ['limit' => 200]);
        $this->set(compact('entidade', 'municipios', 'estados'));
        $this->set('_serialize', ['entidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entidade = $this->Entidades->get($id);
        if ($this->Entidades->delete($entidade)) {
            $this->Flash->success(__('Entidade deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Entidade não pode ser deletada'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
