<?php

class PayRPCClientController extends RPCController {

   private $server_translate_url;
   function init(){
       parent::init();
       $this->server_translate_url='http://'.$_SERVER['HTTP_HOST'].'/translate/TranslateServer/';
   }
    
    public function actionTest(){

        $url = $this->server_translate_url.'member';
        $x=$this->rpc->rpcClient($url);
        $f=$x->getName();
       print_r($f);exit;
        
    }
    

}
