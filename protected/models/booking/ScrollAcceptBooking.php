<?php
/**
 * feedback表 用户反馈
 * @author Administrator
 *
 */
class ScrollAcceptBooking extends EActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'scroll_accept_booking';
    }
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'patient_name' => '患者名称',
            'doctor_name' => '理想医生名称',
            'doctor_hospital_name' => '理想医院',
            'doctor_hp_dept_name' => '理想科室',
            'date_created' => '创建日期',
            'date_updated' => 'Date Updated',
            'date_deleted' => 'Date Deleted'
        );
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Booking the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function beforeValidate() {
        return parent::beforeValidate();
    }

    public function beforeSave() {

        return parent::beforeSave();
    }

    public function getPatientName() {
        return $this->patient_name;
    }

    public function getDoctorName() {
        return $this->doctor_name;
    }

    public function getDoctorHospitalName() {
        return $this->doctor_hospital_name;
    }

    public function getDoctorHpDeptName() {
        return $this->doctor_hp_dept_name;
    }
    
}
