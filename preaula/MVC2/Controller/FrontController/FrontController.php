<?php 

namespace Controller\FrontController;

use Controller\MsgController\MsgController;

class FrontController
{
	public function rodar($rota){
		switch ($rota) {
			case 'index':
					$MsgController = new MsgController();
					$MsgController->executar();
				break;
			
			default:
				# code...
				break;
		}
	}
}