<?php 

namespace Controller\MsgController;

use Model\Msg\MsgModel;
use View\Msg\MsgView;

class MsgController
{
	public function rodar(){
		$view = new MsgView();
		$view->render($msgModel = new MsgModel());
	}
}