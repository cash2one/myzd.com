<?php

class IHospitalDepartment extends EViewModel {

    public function initModel($model, $attributes = null) {
        parent::initModel($model, $attributes);
    }

    public function attributesMapping() {
        return array(
            'id' => 'id',
            'name' => 'name',
            'hid' => 'hospital_id',
            'group' => 'group',
            'description' => 'description',
            'position' => 'position',
            'scale' => 'scale',
            'specialty' => 'specialty',
            'honor' => 'honor',
            'strength' => 'strength',
        );
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getGroup() {
        return $this->group;
    }

    public function getHospitalId() {
        return $this->hid;
    }

}
