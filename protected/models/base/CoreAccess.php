<?php

/**
 * This is the model class for table "core_access".
 *
 * The followings are the available columns in table 'core_access':
 * @property integer $id
 * @property string $user_host_ip
 * @property string $url
 * @property string $url_referrer
 * @property string $user_agent
 * @property string $user_host
 * @property string $date_created
 * @property string $date_updated
 * @property string $date_deleted
 */
class CoreAccess extends EMongoDocument {
    
    public $id;
    public $user_host_ip;
    public $url;
    public $url_referrer;
    public $user_agent;
    public $user_host;
    public $date_created;
    public $date_updated;
    public $date_deleted;
    
    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return CoreAccess the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
    public function getCollectionName()
    {
        return 'CoreAccess';
    }
    // public function tableName() {
    // return '{{passport_users}}';
    // }

    public function findUser($n) {
        $results = $this->findAll();
        return $results;
    }

}
