<?php 

namespace Controller\MsgController;

use Model\MsgModel\MsgModel;
use View\MsgView\MsgView;

class MsgController
{
	public function executar(){
		
		$model = new MsgModel();
		$msg = $model->getMsg();

		$view = new MsgView();
		$view->render($msg);
	}
}