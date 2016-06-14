<?php
/**
 * feedback表 用户反馈
 * @author Administrator
 *
 */
class Feedback extends EActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'feed_back';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('contact_mobile, content', 'required'),
            array('id, user_id', 'numerical', 'integerOnly' => true),
            array('source, contact_mobile', 'length', 'max' => 20),
            array('date_start, date_end, appt_date, date_created, date_updated, date_deleted', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, source, contact_mobile, content, date_start, date_end, appt_date, date_created, date_updated, date_deleted', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => '用户',
            'source' => '来源',
            'contact_mobile' => '联系电话',
            'content' => '内容',
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

    public function getUserId() {
        return $this->user_id;
    }

    public function getSource() {
        return $this->source;
    }

    public function getContactMobile() {
        return $this->contact_mobile;
    }

    public function getContent() {
        return $this->content;
    }
    
}
