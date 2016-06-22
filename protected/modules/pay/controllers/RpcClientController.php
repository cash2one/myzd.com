<?php

class RpcClientController extends Controller {

    private $rpc;
    function __construct(){
        $this->rpc=new RPC();
    }
    
    public function actionTest(){

        $url = 'http://pc.myzd.local/translate/RpcServer/member';
        $x=$this->rpc->rpcClient($url);
        $f=$x->getName();
       print_r($f);exit;
        
    }
    

}
