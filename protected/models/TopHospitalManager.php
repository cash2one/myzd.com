<?php

class TopHospitalManager {
    
    /**
     * 获得医院排行榜列表
     * @param unknown $userId
     */
    public function loadAllTopHospital($values) {
        if(!array_key_exists("page", $values)){
            $page=1;
        }else{
            $page=$values['page'];
        }
        $pageSize=20;
        $limit=($page-1)*$pageSize;
        $options=array('limit'=>$pageSize,'offset'=>$limit);
        $return=TopHospital::model()->getAll($with = null,$options);
        $return['page']=$page+1;
        return $return;
    }

}
