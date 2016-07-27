<?php

class TopHospitalManager {
    
    /**
     * 获得医院排行榜列表
     * @param unknown $userId
     */
    public function loadAllTopHospital() {
        return TopHospital::model()->getAll();
    }

}
