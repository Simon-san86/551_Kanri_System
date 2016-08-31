<?php
namespace App\View\Helper;

use Cake\View\Helper;

class AuthHelper extends Helper{
	
	protected $_user = null;

	public function beforeRender()
	{
		$this->_user = $this->request->Session()->read('Auth');
	}
}