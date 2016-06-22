<?php

class RPCClientController extends Controller {

    private $rpc;
    private $server_translate_url;
    function __construct(){
        $this->rpc=new RPC();
        $this->server_translate_url='http://pc.myzd.local/translate/RpcServer/';
    }
    
    public function actionTest(){

        $url = $this->server_translate_url.'member';
        $x=$this->rpc->rpcClient($url);
        $f=$x->getName();
       print_r($f);exit;
        
    }
    

}
