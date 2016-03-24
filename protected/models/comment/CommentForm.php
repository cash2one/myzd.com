<?php

class CommentForm extends EFormModel {

    public $user_id;
    public $user_name;
    public $bk_type;
    public $bk_id;
    public $doctor_id;
    public $effect;
    public $doctor_attitude;
    public $comment_text;
    public $disease_detail;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, user_name, bk_type, bk_id, effect, comment_text, disease_detail, doctor_attitude', 'required', 'message' => '请填写{attribute}'),
            array('user_id, bk_type, bk_id, effect, doctor_attitude, doctor_id', 'numerical', 'integerOnly' => true),
            array('user_name', 'length', 'max' => 30),
            array('comment_text', 'length', 'max' => 1000),
            array('disease_detail', 'length', 'max' => 200),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_id, user_name, bk_type, bk_id,, comment_text, disease_detail, doctor_attitude, effect', 'safe'),
        );
    }

    public function attributeLabels() {
        return array(
            'user_id' => '关联user',
            'user_name' => 'User Name',
            'bk_type' => '预约类型',
            'bk_id' => '关联预约表',
            'doctor_id' => '关联医生',
            'effect' => '治疗效果',
            'doctor_attitude' => '医生态度',
            'comment_text' => '评价内容',
            'disease_detail' => '疾病',
        );
    }

}
