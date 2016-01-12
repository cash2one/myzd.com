<?php

/* @var $this Controller */
$this->site_menu = array(
    'site' => array(
        '简介' => $this->createUrl('site/page', array('view' => 'aboutus')),
        '合作机构' => '#footer-partner',
        '免责声明' => $this->createUrl('site/page', array('view' => 'terms')),
        '联系我们' => $this->createUrl('site/contactus'),
        '快速咨询' => $this->createUrl('site/enquiry'),
    ),
    'domestic' => array(
        '肝胆外科' => $this->createUrl('huizhen/view', array('id' => 'gandan')),
        '骨科' => $this->createUrl('huizhen/view', array('id' => 'guke')),
       // '胸外科' => $this->createUrl('huizhen/view', array('id' => 'xiongwaike')),
       // '泌尿外科' => $this->createUrl('huizhen/view', array('id' => 'miniaowaike')),
        '心血管' => $this->createUrl('huizhen/view', array('id' => 'xinxueguan')),
        '肿瘤' => $this->createUrl('huizhen/view', array('id' => 'zhongliu')),
        '妇产' => $this->createUrl('huizhen/view', array('id' => 'fuchan')),
        '神经科' => $this->createUrl('huizhen/view', array('id' => 'shenjingke')),
    //'整形美容' => $this->createUrl('huizhen/view', array('id' => 'zhengxing')),
    ),
    'serviceflow' => array(
        '国内服务流程' => $this->createUrl('service/domestic'),
        '海外服务流程' => $this->createUrl('service/overseas')
    ),
    'overseas' => array(
        /*
          '伊利莎白医院' => $this->createUrl('overseas/view', array('id' => 'elizabeth')),
          'divider' => '',
          '神经外科专题' => $this->createUrl('overseas/view', array('id' => 'neuroscience')),
         * 
         */
        '新加坡' => $this->createUrl('overseas/view', array('page' => 'sg')),
        '美国' => $this->createUrl('overseas/view', array('page' => 'usa')),
        '韩国' => $this->createUrl('overseas/view', array('page' => 'korea')),
        '日本' => $this->createUrl('overseas/view', array('page' => 'japan')),
        'divider' => '',
        '特色手术' => $this->createUrl('overseas/surgery'),
    ),
    'event' => array(
        '上海胆道疾病会诊中心' => $this->createUrl('event/view', array('page' => 'dandao')),
        '肝病新疗法' => $this->createUrl('event/view', array('page' => 'liubaochi'))
    ),
);
?>