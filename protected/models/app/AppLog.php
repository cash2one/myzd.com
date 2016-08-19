<?php

/**
 * This is the model class for table "app_log".
 *
 * The followings are the available columns in table 'app_log':
 * @property integer $id
 * @property integer $vendor_id
 * @property string $user_host_ip
 * @property string $username
 * @property string $url
 * @property integer $site
 * @property string $url_referrer
 * @property string $user_agent
 * @property string $user_host
 * @property string $date_created
 * @property string $date_updated
 * @property string $date_deleted
 */
class AppLog extends EMongoDocument
{
    public $id;
    public $vendor_id;
    public $user_host_ip;
    public $username;
    public $url;
    public $site;
    public $url_referrer;
    public $user_agent;
    public $user_host;
    public $date_created;
    public $date_updated;
    public $date_deleted;
    
    
    const SITE_INDEX = 1;
    const SITE_DEPT = 2;
    const SITE_MYGY = 3;
    const SITE_BOOKING = 4;
    
    
    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return AppLog the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function getCollectionName()
    {
        return 'AppLog';
    }
    // public function tableName() {
    // return '{{passport_users}}';
    // }

    public function findUser($n) {
        $results = $this->findAll();
        return $results;
    }

}
