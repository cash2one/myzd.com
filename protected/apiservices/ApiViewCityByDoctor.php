<?php

class ApiViewCityByDoctor extends EApiViewService {

    private $citys;   

    protected function loadData() {
        // load ExpertTeams.
        $this->loadScrollAcceptBooking();
    }

    protected function createOutput() {
        if (is_null($this->output)) {
            $this->output = array(
                'status' => self::RESPONSE_OK,
                'errorCode' => 0,
                'errorMsg' => 'success',
                'results' => $this->citys,
            );
        }
    }

    private function loadScrollAcceptBooking() {
        if (is_null($this->citys)) {
            $this->citys = array();
            $doctors = Doctor::model()->getAll();
            foreach($doctors as $k=>$v){
                $cityIdList[]=$v['city_id'];
            }
            $cityIdList=array_values(array_filter(array_unique($cityIdList)));
            asort($cityIdList);
            $cityList=RegionCity::model()->getAllByIdsAndOrder($cityIdList);
            $one=$cityList[2];
            $cityList[2]=$cityList[0];
            $cityList[0]=$one;
            if (arrayNotEmpty($cityList)) {
                $this->setCityList($cityList);
            }
        }
    }
    /**
     * 
     * @param array $models array of ExpertTeam models.
     */
    private function setCityList(array $models) {
        foreach ($models as $key=>$model) {
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $this->citys[] = $data;
        }
    }


}
?>