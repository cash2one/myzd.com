<?php
class RPCServerController extends TranslateBaseController{
    private $rpc;
    function init(){
        $this->rpc=new RPC();
    }
	
	function actionMember(){
	    $this->rpc->rpcServer('member', 'translate');	
	}
	
    
    
}