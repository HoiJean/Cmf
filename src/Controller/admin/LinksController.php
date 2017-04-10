<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Links Controller
 *
 * @property \App\Model\Table\LinksTable $Links
 */
class LinksController extends AppController
{

    public function moveUp($id)
    {
        if($this->request->is(['post', 'put']))
        {
            $link = $this->Links->get($id);

            if($this->Links->moveUp($link))
            {
                $this->Flash->success(__('Your link has been moved up'));
                return $this->redirect($this->referer());
            }

            $this->Flash->error(__('Could not move up the link'));
            return $this->redirect($this->referer());
        }
    }

    public function moveDown($id)
    {
        if($this->request->is(['post', 'put']))
        {
            $link = $this->Links->get($id);

            if($this->Links->moveDown($link))
            {
                $this->Flash->success(__('Your link has been moved down'));
                return $this->redirect($this->referer());
            }

            $this->Flash->error(__('Could not move down the link'));
            return $this->redirect($this->referer());
        }
    }


    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Menus']
        ];
        $links = $this->paginate($this->Links);

        $this->set(compact('links'));
        $this->set('_serialize', ['links']);
    }

    /**
     * View method
     *
     * @param string|null $id Link id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $link = $this->Links->get($id, [
            'contain' => ['Menus']
        ]);

        $this->set('link', $link);
        $this->set('_serialize', ['link']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $link = $this->Links->newEntity();
        if ($this->request->is('post')) {
            $link = $this->Links->patchEntity($link, $this->request->getData());
            if ($this->Links->save($link)) {
                $this->Flash->success(__('The link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link could not be saved. Please, try again.'));
        }
        $menus = $this->Links->Menus->find('list', ['limit' => 200]);
        $links = $this->Links->find('treeList', [
            'spacer' => ' - '
        ]);

        $this->set(compact('link', 'menus', 'links'));
        $this->set('_serialize', ['link']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Link id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $link = $this->Links->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $link = $this->Links->patchEntity($link, $this->request->getData());
            if ($this->Links->save($link)) {
                $this->Flash->success(__('The link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link could not be saved. Please, try again.'));
        }

        $links = $this->Links->find('treeList', [
            'spacer' => ' - '
        ]);

        $menus = $this->Links->Menus->find('list', ['limit' => 200]);
        $this->set(compact('link', 'menus', 'links'));
        $this->set('_serialize', ['link']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Link id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $link = $this->Links->get($id);
        if ($this->Links->delete($link)) {
            $this->Flash->success(__('The link has been deleted.'));
        } else {
            $this->Flash->error(__('The link could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
