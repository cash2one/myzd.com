<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/help.css");
$urlBookingList = $this->createUrl('booking/list');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$isTerms = Yii::app()->request->getQuery('page', '');
?>

<style>
   
</style>
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
            <div class="border-green pb21">
                <div class="support-center">
                    <div class="row text-center">
                        <h4>常见问题</h4>
                    </div>
                </div> 
                <div class="question-divider"></div>
                <div class="text16 text-center mt30"><strong>关于预约</strong></div>
                <ul class="personalcenter-question">
                    <li class="mt20"><a href="#answer1">如果没有在48小时内收到平台回复怎么办？</a></li>
                    <li class="mt20"><a href="#answer2">手术可以指定医生吗？</a></li>
                    <li class="mt20"><a href="#answer3">是否一定可以预约到指定医生？</a></li>
                    <li class="mt20"><a href="#answer4">手术保证治疗效果吗？</a></li>
                    <li class="mt20"><a href="#answer5">是否能比别人更快入院？</a></li>
                </ul>
                <div class="mt20 ml10 mr10 divide-dashd-green"></div>
                <div class="text16 mt30 text-center"><strong>关于费用</strong></div>
                <ul class="personalcenter-question">      
                    <li class="mt20"><a href="#answer6">手术直通车为什么是收费服务？</a></li>
                    <li class="mt20"><a href="#answer7">手术预约金包括哪些？</a></li>
                    <li class="mt20"><a href="#answer8">手术预约金是否退还？</a></li>
                    <li class="mt20"><a href="#answer9">手术预约金与医生、医院有关吗？</a></li>
                </ul>
                <div class="mt20 ml10 mr10 divide-dashd-green"></div>
                <div class="text16 mt30 text-center"><strong>关于平台</strong></div>
                <ul class="personalcenter-question"> 
                    <li class="mt20 color-gray mb50"><a href="#answer10">名医主刀服务协议</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 payment">
            <div>
                <img class="img-responsive" src="<?php echo $urlResImage; ?>user/question.png">
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer1">  
                <div class="content-header"><span class="ml20">Q：如果没有在48小时内收到平台回复怎么办？</span></div>
                <div class="ml40 mr40">
                    A：名医助手收到预约单后，首先会在第一时间联系患者，确认就诊意向和提交的影像资料，然后开始联系专家，将会在48小时内给予医生的初步反馈。
                </div>
                <div class="color-red-ff0000 ml40 mr40 mt10">如果没有能在48小时内给予任何回复，您可以申请退款。</div>
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer2">  

                <div class="content-header"><span class="ml20">Q：手术可以指定医生吗？</span></div>
                <div class="ml40 mr40">
                    A：名医助手会为每一个患者安排最合适的医生，患者无需指定手术医生。如果有指定需求，可以在预约单里填写或者助手电话回访时提出。				</div>
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer3">  
                <div class="content-header"><span class="ml20">Q：是否一定可以预约到指定医生？</span></div>
                <div class="ml40 mr40">
                    A：名医助手会优先满足患者的指定需求，但因为医生时间安排等特殊性，不保证一定可以预约成功。在这种情况下， 名医主刀会根据患者疾病情况匹配三甲医院副主任级别以上的名医主刀就诊。				</div>
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer4">  
                <div class="content-header"><span class="ml20">Q：手术保证治疗效果吗？</span></div>
                <div class="ml40 mr40">
                    A：因医疗行为的特殊性，患者病情差异巨大，任何人（包括医生、名医主刀）都不能绝对性地对治疗方案、疗效、医疗意外、住院天数做出承诺。				</div>
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer5">  
                <div class="content-header"><span class="ml20">Q：患者是否能比别人更快入院？</span></div>
                <div class="ml40 mr40">
                    A：名医主刀会全力帮助需要手术的患者尽快入院，但所有患者也都需要遵守医院规则和安排，听从专家的具体安排。				</div>				
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer6">  
                <div class="content-header"><span class="ml20">Q：手术直通车为什么是收费服务？</span></div>
                <div class="ml40 mr40">
                    A：手术直通车需要名医主刀指派专业人员，一对一协助患者分析、整理资料并联系医生，协调医患双方并安排就诊时间，工作人员需要付出大量工作时间和精力。				</div>
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer7">  
                <div class="content-header"><span class="ml20">Q：手术预约金包括哪些？</span></div>
                <div class="ml40 mr40 color-red-ff0000">
                    A：包括术前专家咨询费、第一次面诊费（如有需要，安排门诊）和手术相关安排费用。				</div>
            </div> <div class="pb40 border-green mt10 support-content" id="answer8">  

                <div class="content-header"><span class="ml20">Q：预约金是否退还？</span></div>
                <div class="ml40 mr40"  style="line-height:2.5em;">
                    <span class="color-red-ff0000">A：以下2种情况下退还一半预约金：</span><br/>
                    ①在所有专家诊断后都认为该患者不具备手术条件/手术风险过大/达不到病人期望而不接受手术时，退还一半预约金。<br/>
                    ②对于主刀医生确认需要手术后，若平台没有能在一周内安排到合适床位，退还一半预约金。<br/>
                    在与患者确认取消服务后的48小时内，将500元退还到患者支付预约金的账户里。	<br/><span class="color-red-ff0000">	以下这种情况将全额退款：</span><br/>
                    平台无法对接到患者所指定的专家，而患者又不接受名医助手推荐的其他名医，则在与患者确认取消服务后的48小时内，将全部预约金退至患者支付的账户里。		</div>

            </div>
            <div class="pb40 border-green mt10 support-content" id="answer9">  
                <div class="content-header"><span class="ml20">Q：预约金与医院、医生有关吗？</span></div>
                <div class="ml40 mr40">
                    A：此预约金是名医主刀为了提供专业服务、保证服务质量而收取的，并非医院和医生收取的，医院和医生也不会在此服务中获得任何商业利益。				</div>
            </div>
            <div class="pb40 border-green mt10 support-content" id="answer10">  
                <div class="content-header"><span class="ml20">名医主刀服务协议</span></div>
                <div class="mt30 ml40 mr40 agreement">
                    <p style="margin-bottom: 8px; text-align: center; line-height: 150%; background-color: rgb(255, 255, 255); text-align: center;">
                        <span style=";font-family:微软雅黑;color:rgb(51,51,51);letter-spacing:1px;font-weight:bold;font-size:21px">“名医主刀”服务协议</span><span style=";font-family:微软雅黑;color:rgb(51,51,51);letter-spacing:1px;font-size:21px">&nbsp;</span>
                    </p>
                    <p style="margin-bottom: 8px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-weight: bold; font-size: 14px;">一、一般声明</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei';"><span style="color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">1.&nbsp;本声明适用于注册或使用“名医主刀”旗下的“名医主刀”网站、“名医主刀”微信公众号（病人端）、“手术直通车”微信公众号（医生端），“名医主刀”APP（医生端）以及“名医主刀”将来开发的互联网及自媒体等系列电子数据平台（下称本平台）的一切用户。“名医主</span><span style="letter-spacing: 1px; font-size: 14px;">刀“<span style="font-family: 微软雅黑, 'Microsoft YaHei'; letter-spacing: 1px; font-size: 14px;">的商标所有人为上海创贤网络科技有限公司（下称本公司）</span>。</span></span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">2.&nbsp;当您注册或使用“名医主刀”旗下网站、APP、微信公众号等时，表明您已知晓并同意本声明的内容，这些内容自动成为您与本公司协议的一部分。</span>
                    </p>
                    <p style="margin-top: 7px;margin-bottom: 7px;margin-left: 30px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style=";font-family:宋体;color:rgb(51,51,51);letter-spacing:1px;font-size:14px">&nbsp;</span>
                    </p>
                    <p style="margin-bottom: 8px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-weight: bold; font-size: 14px;">二、注册及使用声明</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">1．&nbsp;“名医主刀”的用户分为普通用户和医生用户。普通用户即病人用户，无需注册，可直接在“咨询”界面发布求医信息；医生用户应先注册登录，方可发布转诊求助等信息。本平台仅对本公司收录的正规医院的执业医师开放医生实名注册，经审查认证后可开通医生个人网站。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">2．&nbsp;您注册本网站所提供的信息应当真实有效，不得盗用他人账号，不得提供虚假信息，如经本公司查实您盗用他人账号或提供虚假信息，本公司有权屏蔽或注销该用户。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">3．&nbsp;您的用户名和昵称的注册与使用应符合网络道德，遵守中华人民共和国的相关法律法规，不得含有威胁、淫秽、谩骂、非法、侵害他人权益等有争议性的文字。如因违反上述规范而影响您的注册和使用，本公司不承担责任。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">4．&nbsp;当您注册成功后，您必须保护好自己的账号和密码。如因用户本人泄露而造成的任何损失，本公司不承担责任。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei';"><span style="color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">5．&nbsp;因您注册或使用本平台而产生的个人信息，将为本公司所知晓，您授权本公司因服务于您的目的而使用这些个人信息，包括但不限于</span><span style="color: rgb(51, 51, 51); font-size: 14px;">向您发出服务请求、服务信息等。</span></span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">6．&nbsp;若非本平台注册或使用所明示需要，请您慎重并避免发出带有个人电话、QQ、微信、电子邮箱等联系方式的内容，由此出现被扰或其他伤害行为责任自负。</span>
                    </p>
                    <p style="margin-top: 7px;margin-bottom: 7px;margin-left: 30px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style=";font-family:宋体;color:rgb(51,51,51);letter-spacing:1px;font-size:14px">&nbsp;</span>
                    </p>
                    <p style="margin-bottom: 8px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-weight: bold; font-size: 14px;">三、关于本平台</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">1.&nbsp;本平台的用户包括医、患双方均知晓且同意，本平台主要为医患双方沟通交流、尤其是预约手术提供方便，本平台没有资质也没有能力就特定患者的特定疾病提供任何形式的医疗服务，医患双方经本平台而产生的咨询、转诊、诊疗等行为系医患之间独立决定，本平台不参与、不干预，因咨询、转诊或诊疗等而产生的医疗损害或其他争议，与本平台无关，医患任何一方不得向本公司主张责任。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">2.&nbsp;应用户的请求，本平台可能推荐相关医生、医疗机构或提出诊疗科室的建议，但这些推荐或建议仅具有参考价值，是否接受由用户自行决定。用户承诺，不因平台的此项推荐或建议而追究本公司的责任，也不因用户的直接指定转诊医生而追究本公司的责任。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">3.&nbsp;本平台的用户知晓且同意，因使用本平台的医疗帮助功能而产生的病历资料、咨询内容、医生建议等，在去掉个人隐私的信息后，可以在本平台公开展示。但如果用户提出特别请求，本平台应根据用户请求将相关病历、咨询或建议等设置为隐私。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">4.&nbsp;本平台承诺：除非事先得到用户的许可，不会向第三方出售或借用用户的个人信息以及包含个人信息的疾病资料、咨询建议等信息；非经司法程序或用户的许可，不会向第三方泄露您的个人信息，如姓名、身份证号码、肖像、邮箱、地址、QQ号、个人微信号等以及包含个人信息的疾病资料、咨询建议等信息。</span>
                    </p>
                    <p style="margin-top: 7px;margin-bottom: 7px;margin-left: 28px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style=";font-family:宋体;color:rgb(51,51,51);letter-spacing:1px;font-size:14px">&nbsp;</span>
                    </p>
                    <p style="margin-bottom: 8px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; font-size: 14px;"><span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-weight: bold;">四、关于医生</span><span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px;">&nbsp;</span></span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">1.&nbsp;当您注册成为本平台的用户后，即应遵守本平台的规则，服从本平台的管理。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">2.&nbsp;您通过本平台发表的各种言论，包括各种医学知识和针对特定患者的回复等，均系您的个人行为，不代表本公司赞同其观点或证实其内容的真实性，因该言论而产生的后果，本公司不承担责任。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">3.&nbsp;您在本平台发布的一切消息、文章、言论应当遵守医疗伦理和法律规定，并应当符合社会道德。本平台有权根据下述情形监督您的言论：</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">1)&nbsp;您发布个人信息需基于实际情况，真实，可信，不得有夸大宣传。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">2)&nbsp;科普类文章尽量通俗易懂，不得在科普内容中变相宣传、介绍自己，不得变相推销药品、医疗器械等。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">3)&nbsp;您要本着理解、关心、认真的原则为需要帮助的网友们提供客观、公正、科学的建议。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">4)&nbsp;绝不允许有盈利性的组织或个人的广告。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">5)&nbsp;任何不符合国家医疗卫生相关法律规定的言词。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">6)&nbsp;属于恶意、无聊、灌水范畴的讨论式内容。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">7)&nbsp;内容包含有严重影响网友浏览的内容或格式。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">8)&nbsp;短时间内多次重复的发表。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 52px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">9)&nbsp;其他本网站认为不恰当的情况。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">如果发现您的言论有不符合上述规定的内容，本平台有权利给予屏蔽或删除，并保留对不符合规定言论进行处理而不通知发布者的权利。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">4．医生用户应当注意，您通过本平台获取的特定病人的疾病信息、咨询、诊疗建议等信息，属于该病人的个人隐私，非经病人本人同意或法定程序，不得向本平台外的任何第三人泄露包含该病人个人隐私的上述信息。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style=";font-family:宋体;color:rgb(51,51,51);letter-spacing:1px;font-size:14px">&nbsp;<span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;"></span></span>
                    </p>
                    <p style="margin-bottom: 8px;line-height: 150%;background-color: rgb(255, 255, 255)">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-weight: bold; font-size: 14px;">五、关于病人</span><span style=";font-family:宋体;color:rgb(51,51,51);letter-spacing:1px;font-size:15px">&nbsp;</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">1.&nbsp;本平台主要是为有手术需求的患者提供预约手术医生的服务。因此如果您是一名患者，打算通过本平台预约医生的服务时，请首先考虑您的看病需求。本平台强烈建议，您应先到就近医院首诊，有了初步诊断后，再考虑是否通过本平台预约手术或进一步的诊疗。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">2.&nbsp;当您决定通过本平台预约看病时，如果需要提交首诊时的病历，请您按时间、先门诊后住院病历的顺序拍照后依次提交。为便于医生阅读，请确保照片清晰。影像学片子，可拍摄后直接提交。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">3.&nbsp;当您通过本平台预约看病成功以后，意味着您成为本平台的用户，将自愿遵守本平台的规则，并服从于本平台的统一管理。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">4.&nbsp;当您预约看病成功以后，接待您的医生是在本平台上已实名注册并已开通网上转诊服务的医生，他可能为您安排一次线下门诊。此线下门诊是医生在所在医院正常门诊之外的加号服务。当您获得转诊服务后，如需进一步预约手术，可通过转诊医生预约，也可直接向本平台发出预约手术医生的请求。</span>
                    </p>
                    <p style="margin-top: 7px; margin-bottom: 7px; margin-left: 30px; line-height: 2em; background-color: rgb(255, 255, 255);">
                        <span style="font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(51, 51, 51); letter-spacing: 1px; font-size: 14px;">5.&nbsp;作为病人，您知晓且同意，通过本平台，医生为您提供的咨询建议及延伸到线下的诊疗包括手术服务，均系医生与您之间的独立行为，无论是医疗行为的具体内容还是医疗费用的收取，本平台不参与、不干预。本平台不能保证疗效，对可能发生的诊疗效果、医疗损害或医疗费用争议，您不应当向本平台提出主张。</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var isTerms = '<?php echo $isTerms; ?>';
        if (isTerms == 'terms') {
            $("ul.personalcenter-question li:last").addClass("active").show();
            $(".payment .support-content:last").show();
        } else {
            $("ul.personalcenter-question li:first").addClass("active").show();
            $(".payment .support-content:first").show();
        }
        $("ul.personalcenter-question li").click(function () {
            $("ul.personalcenter-question li").removeClass("active");
            $(this).addClass("active"); //Add "active" class to selected tab  
            $(".support-content").hide();
            var activeTab = $(this).find("a").attr("href");

            $(activeTab).fadeIn(); //Fade in the active content  
            return false;
        });
    });
</script>