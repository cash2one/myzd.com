<?php

class ApiViewScrollAcceptBooking extends EApiViewService {

    private $bookings;   

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
                'results' => $this->bookings,
            );
        }
    }

    private function loadScrollAcceptBooking() {
        if (is_null($this->bookings)) {
            $this->bookings = array();
            $bookings = ScrollAcceptBooking::model()->getAll();
            if (arrayNotEmpty($bookings)) {
                $this->setBookings($bookings);
            }
        }
    }
    /**
     * 
     * @param array $models array of ExpertTeam models.
     */
    private function setBookings(array $models) {
        $i=0;
        foreach ($models as $key=>$model) {
            if(is_int(($key/4))){
                $i++;
            }
            $data = new stdClass();
            $data->id = $model->getId();
            $data->patient_name = $model->getPatientName();
            $data->doctor_name = $model->getDoctorName();
            $data->doctor_hospital_name = $model->getDoctorHospitalName();
            $data->doctor_hp_dept_name = $model->getDoctorHpDeptName();
            $this->bookings[$i][] = $data;
        }
    }


}
?>