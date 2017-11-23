<?php 

namespace Controller\FrontController;

use Controller\MsgController\MsgController;
use Controller\IndexController\IndexController;

class FrontController
{
	public function rodar($rota){
		switch ($rota) {
			case 'msg':
				$controller = new MsgController();
				$controller->executar();
				break;
				
			case 'index':
				$controller = new IndexController();
				$controller->executar();
				break;
			
			default:
				echo 'Erro';
				break;
		}
	}
}