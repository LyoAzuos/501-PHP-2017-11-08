<?php 

namespace Controller\IndexController;

use Model\MsgModel\MsgModel;
use View\MsgView\MsgView;

class IndexController
{
	public function executar(){
		
		$model = new MsgModel();
		$msg = $model->getIndex();

		$view = new MsgView();
		$view->render($msg);
	}
}