<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class TenposController extends AppController
{
	public $paginate = [
        'limit' => 10,
        'order' => [
            'Tenpos.id' => 'asc',
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

	public function index()
	{
		// $this->set('tenpos', $this->Tenpos->find('all'));
		$this->set('tenpos', $this->paginate());
		$this->viewBuilder()->layout('layout');
	}

	public function view($id = null)
	{
		$tenpo = $this->Tenpos->get($id);
		$this->set(compact('tenpo'));
		$this->viewBuilder()->layout('layout');
	}

	public function add()
	{
		$tenpo = $this->Tenpos->newEntity();
		if ($this->request->is('post')) {
			$tenpo = $this->Tenpos->patchEntity($tenpo, $this->request->data);
			if ($this->Tenpos->save($tenpo)) {
				$this->Flash->success(__("新しい店舗が登録されました。"));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('登録する事ができません。'));
		}
		$this->set('tenpo', $tenpo);
	}

	public function edit($id = null)
	{
		$tenpo = $this->Tenpos->get($id);
		if ($this->request->is(['post', 'put'])) {
			$this->Tenpos->patchEntity($tenpo, $this->request->data);
			if ($this->Tenpos->save($tenpo)) {
				$this->Flash->success(__('この店舗は編集されました。'));
				return $this->redirect(['action' => 'view', $tenpo->id]);
			}
			$this->Flash->error(__('編集する事ができません。'));
		}
		$this->set('tenpo', $tenpo);
	}

	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);
		$tenpo = $this->Tenpos->get($id);
		if ($this->Tenpos->delete($tenpo)) {
			$this->Flash->success(__('この店舗が削除されました。'));
			return $this->redirect(['action' => 'index']);
		}
	}

	public function search()
	{
		$area = '';
		if ($this->request->is(['post'])) {
			$dataList = $this->request->data;
			$data = $dataList['地区'];
			// debug($data);
		switch ($data) {
			case '0':
				$area = 'なんば・心斎橋・天王寺地区';
				break;
			case '1':
				$area = '梅田・北大阪地区';
				break;
			case '2':
				$area = '近鉄沿線・奈良地区';
				break;
			case '3':
				$area = '阪急沿線・神戸地区';
				break;
			case '4':
				$area = '京阪沿線・京都・滋賀地区';
				break;
			case '5':
				$area = 'ユニバーサルシティ地区';
				break;
			case '6':
				$area = '南海沿線・和歌山地区';
				break;
			default:
				$area = '';
				break;
			}
		}
		$tenpo = $this->Tenpos->find()->where(['district' => $area]);
		$this->set('tenpos', $tenpo);
		// debug(['district' => $area]);
	}
}