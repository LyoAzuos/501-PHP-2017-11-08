<?php 

namespace View\Msg;

class MsgView
{
	public function render($msg){
		echo $msg->getMessage();
	}
}