<?php
class TestMongo extends EMongoDocument
{
     public $login;
        public $name;
        public $pass;
        public $autoId;
	public $z;   
        // This has to be defined in every model, this is same as with standard Yii ActiveRecord
        public static function model($className=__CLASS__)
        {
         return parent::model($className);
       }
  
       // This method is required!
       public function getCollectionName()
       {
         return 'foo';
       }
		public function addInfo() {
        $this->z='1234';
        $this->autoId = $this->getAutoIncreaseId();
        $this->save();
    }
       public function rules()
       {
         return array(
           array('login, pass', 'required'),
           array('login, pass', 'length', 'max' => 20),
           array('name', 'length', 'max' => 255),
         );
       }
  
       public function attributeLabels()
       {
         return array(
           'login'  => 'User Login',
           'name'   => 'Full name',
           'pass'   => 'Password',
         );
       }
}

?>       
