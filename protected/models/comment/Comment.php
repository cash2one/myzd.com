<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $id
 * @property integer $user_id
 * @property string $user_name
 * @property integer $bk_type
 * @property integer $bk_id
 * @property integer $service
 * @property integer $post_operative
 * @property string $comment_text
 * @property integer $display_order
 * @property string $date_created
 * @property string $date_updated
 * @property string $date_deleted
 */
class Comment extends EActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'comment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('date_created', 'required'),
            array('user_id, bk_type, bk_id, service, post_operative, display_order', 'numerical', 'integerOnly' => true),
            array('user_name', 'length', 'max' => 30),
            array('comment_text', 'length', 'max' => 1000),
            array('date_updated, date_deleted', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, user_name, bk_type, bk_id, service, post_operative, comment_text, display_order, date_created, date_updated, date_deleted', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => '主键',
            'user_id' => '关联user',
            'user_name' => 'User Name',
            'bk_type' => '预约类型',
            'bk_id' => '关联预约表',
            'service' => '服务效率',
            'post_operative' => '术后效果',
            'comment_text' => '其他分享与评价',
            'display_order' => 'Display Order',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'date_deleted' => 'Date Deleted',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('user_name', $this->user_name, true);
        $criteria->compare('bk_type', $this->bk_type);
        $criteria->compare('bk_id', $this->bk_id);
        $criteria->compare('service', $this->service);
        $criteria->compare('post_operative', $this->post_operative);
        $criteria->compare('comment_text', $this->comment_text, true);
        $criteria->compare('display_order', $this->display_order);
        $criteria->compare('date_created', $this->date_created, true);
        $criteria->compare('date_updated', $this->date_updated, true);
        $criteria->compare('date_deleted', $this->date_deleted, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Comment the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
