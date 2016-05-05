<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/help.css");
$urlBookingList = $this->createUrl('booking/list');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$isTerms = Yii::app()->request->getQuery('page', '');
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >
            <a>帮助中心</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-3">
            <div class="pb21">
                <div class="support-center">
                    <div class="row text-center">
                        <h4>常见问题</h4>
                    </div>
                </div> 
                <div class="question-divider"></div>
                <div class="question-left">
                    <div class="problem-area">
                        <div class="text16 pt30 title pl20"><strong>关于注册/登录<span class="text20"><i class="fa fa-angle-right ml5"></i><i class="fa fa-angle-down ml5"></i></span></strong></div>
                        <ul class="personalcenter-question">
                            <li class="mt20"><a href="#answer1">如何注册名医主刀账号？</a></li>
                            <li class="mt20"><a href="#answer2">一个手机号能注册几个用户？</a></li>
                            <li class="mt20"><a href="#answer3">为什么注册不成功，提示“手机号已被注册”？</a></li>
                            <li class="mt20"><a href="#answer4">一直收不到验证码或提示“验证码错误”？</a></li>
                            <li class="mt20"><a href="#answer5">登录方式有哪几种？</a></li>
                        </ul>
                    </div>                  
                    <div class="mt20 ml10 mr10 divide-dashd-gray"></div>
                    <div class="problem-area">
                        <div class="text16 pl20 mt30 title"><strong>关于预约<span class="text20"><i class="fa fa-angle-right ml5"></i><i class="fa fa-angle-down ml5 text20"></i></span></strong></div>
                        <ul class="personalcenter-question">
                            <li class="mt20"><a href="#answer6">我为家人预约，预约时填写我本人的姓名和手机号还是家人的？</a></li>
                            <li class="mt20"><a href="#answer7">预约时需要提供的资料有哪些？</a></li>
                            <li class="mt20"><a href="#answer8">名医主刀能根据我的疾病推荐权威专家吗？</a></li>
                            <li class="mt20"><a href="#answer9">没有做过检查没有确诊的情况下怎样预约手术呢？</a></li>
                            <li class="mt20"><a href="#answer10">交付平台预约金后，如果没有在48小时内收到平台回复怎么办？</a></li>
                            <li class="mt20"><a href="#answer11">手术可以指定主刀医生吗？</a></li>
                            <li class="mt20"><a href="#answer12">是否一定可以预约到指定主刀医生？</a></li>
                            <li class="mt20"><a href="#answer13">手术保证治疗效果吗？</a></li>
                            <li class="mt20"><a href="#answer14">患者通过名医主刀是否能比别人更快入院？</a></li>
                            <li class="mt20"><a href="#answer15">付费后多长时间可以确定门诊时间？</a></li>
                            <li class="mt20"><a href="#answer16">一定能帮我们找到权威专家吗？</a></li>
                            <li class="mt20"><a href="#answer17">名医主刀的主要为患者提供的服务有哪些？</a></li>
                        </ul>
                    </div>
                    <div class="mt20 ml10 mr10 divide-dashd-gray"></div>
                    <div class="problem-area">
                        <div class="text16 mt30 pl20 title"><strong>关于费用<span class="text20"><i class="fa fa-angle-right ml5"></i><i class="fa fa-angle-down ml5"></i></span></strong></div>
                        <ul class="personalcenter-question">      
                            <li class="mt20"><a href="#answer18">名医主刀为什么是收费服务？</a></li>
                            <li class="mt20"><a href="#answer19">包含哪些服务？</a></li>
                            <li class="mt20"><a href="#answer20">预约金是否可以退还？</a></li>
                            <li class="mt20"><a href="#answer21">手术需要多少费用？</a></li>
                        </ul>
                    </div>
                    <div class="mt20 ml10 mr10 divide-dashd-gray"></div>
                    <div class="problem-area">
                        <div class="text16 mt30 pl20 title"><strong>关于平台<span class="text20"><i class="fa fa-angle-right ml5"></i><i class="fa fa-angle-down ml5"></i></span></strong></div>
                        <ul class="personalcenter-question"> 
                            <li class="mt20"><a href="#answer22">名医主刀网站的医生都是真实医生吗，如何确认医生身份？</a></li>
                            <li class="mt20"><a href="#answer23">你们如何审核医生资质？</a></li>
                            <li class="mt20"><a href="#answer24">什么是名医助手？</a></li>
                            <li class="mt20"><a href="#answer25">医生是否知晓和你们的合作？</a></li>
                            <li class="mt20"><a href="#answer26">网站是否真实？</a></li>
                            <li class="mt20"><a href="#answer27">名医主刀能挂到专家号？收费吗？</a></li>
                            <li class="mt20"><a href="#answer28">名医主刀是医疗机构吗？医生通过名医主刀去异地飞刀，属于多点执业吗？</a></li>
                            <li class="mt20"><a href="#answer29">患者的病情提交至名医主刀，如何保护其隐私？</a></li>
                            <li class="mt20"><a href="#answer30">拨打400-6277-120是免费的吗？</a></li>
                            <li class="mt20 pb20"><a href="#answer31">名医主刀服务协议</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 payment">
            <div>
                <img class="img-responsive" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14624356699601">
            </div>
            <div class="border-grayb5 mt10 lineh2-5em">
                <div class="pb40  support-content" id="answer1">  
                    <div class="content-header"><span class="ml20">Q：如何注册名医主刀账号？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医主刀仅支持手机号注册，点击“注册”-输入常用手机号码，点击“获取验证码”-输入短信中的验证码-设置密码-点击“注册登录”。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer2">  
                    <div class="content-header"><span class="ml20">Q：一个手机号能注册几个用户？</span></div>
                    <div class="ml40 mr40">
                        A：一个手机号只能注册一个账户。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer3">  
                    <div class="content-header"><span class="ml20">Q：为什么注册不成功，提示“手机号已被注册”？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>一个手机号只能被注册一次，该提示说明您的手机号已经注册过，不能再次注册。建议直接使用该手机号登录，可以在登录界面点击“获取验证码”，之后通过验证码登录。如仍不成功，请您拨打名医主刀客服电话400-6277-120，我们将为您解决。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer4">  
                    <div class="content-header"><span class="ml20">Q：一直收不到验证码或提示“验证码错误”？</span></div>
                    <div class="ml40 mr40">
                        <div>A：（1）请确认您的手机是否有存在短信屏蔽或者黑名单设置等情况，修改设置后查看是否可以正常接收；</div>
                        <div class="ml26">（2）验证码的有效时间为60秒，过时将自动失效；</div>
                        <div class="ml26 pull-left h5-em">（3）</div><div>如果验证码填写正确且在有效时间内，还是一直提示验证码填写错误，建议您清除缓存后重试或卸载名医主刀重新安装；</div>
                        <div class="clearfix"></div>
                        <div class="ml26">（4）若以上都不成功，请您拨打名医主刀客服电话400-6277-120。我们将为您解决。</div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer5">  
                    <div class="content-header"><span class="ml20">Q：登录方式有哪几种？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>目前平台支持两种登录方式：手机号快速登录和账号密码登录。 您可以直接输入手机号并填写获取到的验证码（如果您尚未注册过，即默认您注册了名医主刀平台，以后每次通过获取验证码登录）。第二种方式是，如果您以前设置过账号密码（账号为您的手机号），您可以使用账号密码登录，免去每次获取验证码的麻烦。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer6">  
                    <div class="content-header"><span class="ml20">Q：我为家人预约，预约时填写我本人的姓名和手机号还是家人的？</span></div>
                    <div class="ml40 mr40">
                        A：本人或家人都可以，名医助手联系后需提供患者本人基本疾病信息。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer7">  
                    <div class="content-header"><span class="ml20">Q：预约时需要提供的资料有哪些？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>需要提供：1、基础资料：姓名、性别、年龄、疾病诊断、就诊医院、治疗状况等；
                            2、相关检查资料：核磁（MRI）、CT、病理、B超及相关诊断检验报告等；</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer8">  
                    <div class="content-header"><span class="ml20">Q：名医主刀能根据我的疾病推荐权威专家吗？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>权威医院每个科室细分领域比较多，需要了解患者的具体病情、提供详细的疾病资料名医助手才能帮您匹配最合适的专家，可以点击网站右上角快速预约进行申请。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer9">  
                    <div class="content-header"><span class="ml20">Q：没有做过检查没有确诊的情况下怎样预约手术呢？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医主刀是国内最大的移动医疗手术平台，针对有手术需求，或希望尽快确诊是否需要手术的患者。未就诊的患者建议先去正规医院做疾病诊断，明确病情后，若需要手术可通过网站预约手术。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer10">  
                    <div class="content-header"><span class="ml20">Q：交付平台预约金后，如果没有在48小时内收到平台回复怎么办？</span></div>
                    <div class="ml40 mr40 color-red-ff0000">
                        <div class="pull-left h300p">A：</div><div>名医助手收到预约单后，会在第一时间联系患者，确认就诊意向和提交的疾病诊断资料，确定病历无误后开始联系专家，将会在48小时内给予医生的初步反馈。
                            如果未能在48小时内给予回复，您可以申请退款。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer11">  
                    <div class="content-header"><span class="ml20">Q：手术可以指定主刀医生吗？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医助手会为每一个患者安排最合适的医生，患者无需指定手术医生。如果有指定需求，可以在预约单里填写或者助手电话回访时提出。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>  
                <div class="pb40  support-content" id="answer12">  
                    <div class="content-header"><span class="ml20">Q：是否一定可以预约到指定主刀医生？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医助手会优先满足患者的指定需求，但因为医生时间安排等特殊性，不保证一定可以预约成功。在这种情况下，名医主刀会根据患者疾病情况匹配三甲医院副主任级别以上的名医主刀手术。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer13">  
                    <div class="content-header"><span class="ml20">Q：手术保证治疗效果吗？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>因医疗行为的特殊性，患者病情差异巨大，任何人（包括医生、名医主刀）都不能绝对性地对治疗方案、疗效、医疗意外、住院天数做出承诺。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer14">  
                    <div class="content-header"><span class="ml20">Q：患者通过名医主刀是否能比别人更快入院？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>三甲医院的床位由医院统一管理，名医主刀无法干涉医院秩序；名医主刀可以为患者安排合作医院的空闲床位，比如一些二甲医院，他们的手术设备和医疗环境与三甲医院相当；我们会找到有空病床的医院，再预约专家有空的时间前去手术。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer15">  
                    <div class="content-header"><span class="ml20">Q：付费后多长时间可以确定门诊时间?</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>一般付费后18小时内给予患者初次反馈；医生时间相对不固定，如遇特殊情况如出差等情况，可能会有延时的问题。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer16">  
                    <div class="content-header"><span class="ml20">Q：一定能帮我们找到权威专家吗？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医主刀是国内最大的移动医疗手术平台，针对有手术需求的患者。为了保证权威性，平台只收录副主任以上级别的专家，帮患者匹配的肯定是最适合患者病情的权威专家。专家的信息您都可以上网搜索查询。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer17">  
                    <div class="content-header"><span class="ml20">Q：名医主刀的主要为患者提供的服务有哪些？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医主刀是国内最大的移动医疗手术平台，针对有手术需求，或希望尽快确诊是否需要手术的患者。<span class="color-red-ff0000">主要是将一些二甲医院的空闲床位整合，邀请医生利用休息时间去为患者做手术，实现资源、效率最大化。</span></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer18">  
                    <div class="content-header"><span class="ml20">Q：名医主刀为什么是收费服务？</span></div>
                    <div class="ml40 mr40">
                        A：名医主刀为保障服务顺利、满意进行付出运营成本，所以该服务是收费服务。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer19">  
                    <div class="content-header"><span class="ml20">Q：包含哪些服务？</span></div>
                    <div class="ml40 mr40">
                        A：包含术前病例资料整理，专家匹配，第一次面诊陪诊服务费（如有需要，安排门诊）。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer20">  
                    <div class="content-header"><span class="ml20">Q：预约金是否可以退还？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>
                            当平台无法对接到患者所指定的专家，而且患者又不接受名医助手推荐的其他名医，则在与患者确认取消服务后的48小时内，将全部预约金200元退至患者支付的账户里。
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer21">  
                    <div class="content-header"><span class="ml20">Q：手术需要多少费用？</span></div>
                    <div class="ml40 mr40">
                        <span class="color-red-ff0000">A：具体的手术费用需要根据患者确诊的疾病、身体状况和治疗方式、医院和医生的情况综合评估得出。</span>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer22">  
                    <div class="content-header"><span class="ml20">Q：名医主刀网站的医生都是真实医生吗，如何确认医生身份？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>是医生本人；名医主刀医生收录的医生均为正规医院，有合法行医资质的医生。名医主刀对于收录展示的医生均有严格资质审核。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer23">  
                    <div class="content-header"><span class="ml20">Q：你们如何审核医生资质？</span></div>
                    <div class="ml40 mr40">
                        A：申请者注册后，我们会到医院、科室核实注册医生信息；后期会有专人到医院索取申请者相关证件信息等。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer24">  
                    <div class="content-header"><span class="ml20">Q：什么是名医助手？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医助手是名医主刀的工作人员，100%具备医学专业背景，长期接受三甲医院医生以及内部的培训、考核、筛选。医疗助手根据患者提交病情审核，仅提供疾病方向的医生匹配，不进行诊疗。</div>
                        <div class="clearfix"></div>
                    </div>               
                </div>
                <div class="pb40  support-content" id="answer25">  
                    <div class="content-header"><span class="ml20">Q：医生是否知晓和你们的合作？</span></div>
                    <div class="ml40 mr40">
                        A：知晓；如去找医生面诊，可与医生本人当面核实。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer26">  
                    <div class="content-header"><span class="ml20">Q：网站是否真实？</span></div>
                    <div class="ml40 mr40">
                        A：网站已经备案，可在网站首页最下方看到备案号。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer27">
                    <div class="content-header"><span class="ml20">Q：名医主刀能挂到专家号？收费吗？</span></div>
                    <div class="ml40 mr40">
                        A：名医主刀不提供预约挂号业务。
                    </div>
                </div>
                <div class="pb40  support-content" id="answer28">  
                    <div class="content-header"><span class="ml20">Q：名医主刀是医疗机构吗？医生通过名医主刀去异地飞刀，属于多点执业吗？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医主刀不属于医疗机构，根据《执业医师法》，医生只有在医疗机构开展诊疗相关工作才算行医行为。名医主刀汇集了国内外顶级名医资源和闲置床位资源，并利用互联网技术实现医患精准匹配，医疗资源优化配置，帮助患者解决“好看病，看好病”的切实需求。医生会在有资质的医疗单位进行诊疗行为，符合卫计委规定。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer29">  
                    <div class="content-header"><span class="ml20">Q：患者的病情提交至名医主刀，如何保护其隐私？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>名医主刀对于注册用户的真实信息予以保护，不向任何第三方透露。患者提交咨询的病情，仅患者本人和提供服务的医生能看到。网站首页也有信息保护措施的公示。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer30">  
                    <div class="content-header"><span class="ml20">Q：拨打400-6277-120是免费的吗？</span></div>
                    <div class="ml40 mr40">
                        <div class="pull-left h300p">A：</div><div>拨打400-6277-120是免长途费的，您在国内任何地区拨打该电话，只需承担本地市话费，长途费由名医主刀承担。</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pb40  support-content" id="answer31">  
                    <div class="content-header"><span class="ml20">名医主刀服务协议</span></div>
                    <div class="mt30 ml40 mr40 agreement">
                        <div style="text-align:center;">
                            <span style="font-family:'Microsoft YaHei';font-size:18px;line-height:2;"><strong>“名医主刀”服务协议 &nbsp;</strong></span>
                        </div>
                        <span style="font-size:14px;font-family:'Microsoft YaHei';">
                            <span style="line-height:2;"><strong>一、一般声明&nbsp;</strong></span>
                        </span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">1. 本声明适用于注册或使用“名医主刀”旗下的“名医主刀”网站、“名医主刀”微信公众号（病人端）、“手术直通车”微信公众号（医生端），“名医主刀”APP（医生端）以及“名医主刀”将来开发的互联网及自媒体等系列电子数据平台（下称本平台）的一切用户。“名医主刀“的商标所有人为上海创贤网络科技有限公司（下称本公司）。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">2. 当您注册或使用“名医主刀”旗下网站、APP、微信公众号等提供的服务时，表明您已知晓并同意本声明的内容，这些内容自动成为您与本公司协议的一部分。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">&nbsp;&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;"><strong>二、注册及使用声明&nbsp;</strong></span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">1. “名医主刀”的用户分为普通用户和医生用户。普通用户即病人用户，可以在“咨询”界面发布求医信息；医生用户，可以在本平台发布转诊求助等信息。本平台仅对本公司收录的正规医院的执业医师开放医生实名注册，经审查认证后可开通医生个人网站。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">2. 您注册本网站所提供的信息应当真实有效，不得盗用他人账号，不得提供虚假信息，如经本公司查实您盗用他人账号或提供虚假信息，本公司有权屏蔽或注销该用户。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">3. 您的用户名和昵称的注册与使用应符合网络道德，遵守中华人民共和国的相关法律法规，不得含有威胁、淫秽、谩骂、非法、侵害他人权益等有争议性的文字。如因违反上述规范而影响您的注册和使用，本公司不承担责任。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">4. 当您注册成功后，您必须保护好自己的账号和密码。如因用户本人泄露而造成的任何损失，本公司不承担责任。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">5. 因您注册或使用本平台而产生的个人信息，将为本公司所知晓，您授权本公司因服务于您的目的而使用这些个人信息，包括但不限于向您发出服务请求、服务信息等。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">6. &nbsp;若非本平台注册或使用所明示需要，请您慎重并避免发出带有个人电话、QQ、微信、电子邮箱等联系方式的内容，由此出现被扰或其他伤害行为责任自负。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">&nbsp;&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;"><strong>三、关于本平台&nbsp;</strong></span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">1. 本平台的用户包括医、患双方均知晓且同意，本平台主要为医患双方沟通交流、尤其是预约手术提供方便，本平台没有资质也没有能力就特定患者的特定疾病提供任何形式的医疗服务，医患双方经本平台而产生的咨询、转诊、诊疗等行为系医患之间独立决定，本平台不参与、不干预，因咨询、转诊或诊疗等而产生的医疗损害或其他争议，与本平台无关，医患任何一方不得向本公司主张责任。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">2. 应用户的请求，本平台可能推荐相关医生、医疗机构或提出诊疗科室的建议，但这些推荐或建议仅具有参考价值，是否接受由用户自行决定。用户承诺，不因平台的此项推荐或建议而追究本公司的责任，也不因用户的直接指定转诊医生而追究本公司的责任。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;color:#E53333;">3. 本平台特别告知，鉴于国内医疗和保险市场的发展，因本公司提供预约、转诊而发生的应由病人客户支付的费用，本公司可能通过与第三方保险公司的合作，以购买人身保险的方式予以支付。</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">4. 本平台的用户知晓且同意，因使用本平台的医疗帮助功能而产生的病历资料、咨询内容、医生建议等，在去掉个人隐私的信息后，可以在本平台公开展示。但如果用户提出特别请求，本平台应根据用户请求将相关病历、咨询或建议等设置为隐私。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">5. 本平台承诺：除非事先得到用户的许可，不会向第三方出售或借用用户的个人信息以及包含个人信息的疾病资料、咨询建议等信息；非经司法程序或用户的许可，不会向第三方泄露您的个人信息，如姓名、身份证号码、肖像、邮箱、地址、QQ号、个人微信号等以及包含个人信息的疾病资料、咨询建议等信息。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">&nbsp;&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;"><strong>四、关于医生 &nbsp;</strong></span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">1. 当您注册成为本平台的用户后，即应遵守本平台的规则，服从本平台的管理。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;color:#E53333;">2. 作为医生用户，您知晓并认可本公司所提供的预约及转诊等服务，您有义务向您的病人告知本平台的服务流程、付费流程。如需与第三方保险公司合作，您有义务向病人充分解释、取得病人授权，同意本公司为病人就本次预约、转诊及手术投保人身保险。</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">3. 您通过本平台发表的各种言论，包括各种医学知识和针对特定患者的回复等，均系您的个人行为，不代表本公司赞同其观点或证实其内容的真实性，因该言论而产生的后果，本公司不承担责任。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">4. 您在本平台发布的一切消息、文章、言论应当遵守医疗伦理和法律规定，并应当符合社会道德。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">&nbsp; 如果发现您的言论有不符合上述规定的内容，本平台有权利给予屏蔽或删除，并保留对不符合规定言论进行处理而不通知发布者的权利。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">5. 医生用户应当注意，您通过本平台获取的特定病人的疾病信息、咨询、诊疗建议等信息，属于该病人的个人隐私，非经病人本人同意或法定程序，不得向本平台外的任何第三人泄露包含该病人个人隐私的上述信息。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">&nbsp;&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;"><strong>五、关于病人 &nbsp;</strong></span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">1. 本平台主要是为有手术需求的患者提供预约手术医生的服务。因此如果您是一名患者，打算通过本平台预约医生的服务时，请首先考虑您的看病需求。本平台强烈建议，您应先到就近医院首诊，有了初步诊断后，再考虑是否通过本平台预约手术或进一步的诊疗。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">2. 当您决定通过本平台预约看病时，如果需要提交首诊时的病历，请您按时间、先门诊后住院病历的顺序拍照后依次提交。为便于医生阅读，请确保照片清晰。影像学片子，可拍摄后直接提交。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">3. 当您通过本平台预约看病成功以后，意味着您成为本平台的用户，将自愿遵守本平台的规则，并服从于本平台的统一管理。&nbsp;</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">4. 当您预约看病成功以后，接待您的医生是在本平台上已实名注册并已开通网上转诊服务的医生，他可能为您安排一次线下门诊。此线下门诊是医生在所在医院正常门诊之外的加号服务。当您获得转诊服务后，如需进一步预约手术，可通过转诊医生预约，也可直接向本平台发出预约手术医生的请求。</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;color:#E53333;">5. 本平台特别提醒您， 鉴于国内医疗和保险市场的发展，当您通过本平台提出预约、转诊手术请求时，本公司可能与第三方保险公司合作，代您就本次预约、转诊及手术投保人身保险。为此，您同意本公司与第三方保险公司合作，并授权本公司就此次预约、转诊及手术投保人身保险。当你通过本平台支付了人身保险费之后，将不用再向本公司支付相关服务费用。</span><br />
                        <span style="font-size:14px;font-family:'Microsoft YaHei';line-height:2;">6. 作为病人，您知晓且同意，通过本平台，医生为您提供的咨询建议及延伸到线下的诊疗包括手术服务，均系医生与您之间的独立行为，无论是医疗行为的具体内容还是医疗费用的收取，本平台不参与、不干预。本平台不能保证疗效，对可能发生的诊疗效果、医疗损害或医疗费用争议，您不应当向本平台提出主张。&nbsp;</span><br />
                        <div>
                            <br />
                        </div>
                        <p>
                            <br />
                        </p>
                        <p>
                            <span style="font-size:12px;line-height:1.5;"></span><span style="font-size:12px;line-height:1.5;"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".problem-area:first").addClass("active");
        $("ul.personalcenter-question li:first a").addClass("active");
        $(".problem-area>.title").click(function () {
            //$(".problem-area").removeClass("active");
            if ($(this).parent().hasClass("active")) {
                $(".problem-area").removeClass("active");
            } else {
                $(".problem-area").removeClass("active");
                $(this).parent().addClass("active");
            }
        });
        var isTerms = '<?php echo $isTerms; ?>';
        if (isTerms == 'terms') {
            $(".problem-area:first").removeClass("active");
            $(".problem-area:last").addClass("active");
            $("ul.personalcenter-question li:last a").addClass("active").show();
            $(".payment .support-content:last").show();
        } else {
            $("ul.personalcenter-question li:first").addClass("active").show();
            $(".payment .support-content:first").show();
        }
        $("ul.personalcenter-question li a").click(function () {
            $("ul.personalcenter-question li a").removeClass("active");
            $(this).addClass("active"); //Add "active" class to selected tab  
            $(".support-content").hide();
            var activeTab = $(this).attr("href");
            $(activeTab).fadeIn(); //Fade in the active content  
            $("html,body").animate({"scrollTop": 0}, 0);
            return false;
        });

    });
</script>