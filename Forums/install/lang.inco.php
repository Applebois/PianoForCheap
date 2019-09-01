﻿<?php

define('UC_VERNAME', 'English Discuz!');

$lang = array(

	'SC_GBK' => 'Simplified Chinese',
	'TC_BIG5' => 'Traditional Chinese',
	'SC_UTF8' => 'Simplified Chinese UTF8',
	'TC_UTF8' => 'Traditional Chinese UTF8',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLISH UTF-8',

	'title_install' => SOFT_NAME.' Installation Wizard',
	'agreement_yes' => 'I Agree',
	'agreement_no' => 'I Disagree',
	'notset' => 'Unlimited',

	'message_title' => 'Message',
	'error_message' => 'Error Message',
	'message_return' => 'Return',
	'return' => 'Return',
	'install_wizard' => 'Installation Wizard',
	'config_nonexistence' => 'Config file do not exist',
	'nodir' => 'Directory do not exist',
	'short_open_tag_invalid' => 'Sorry，Please write short_open_tag in php.ini as On，or the installation cannot be continued',
	'redirect' => 'Your browser will redirect you automatically<br>If it does not redirect you automaticly，please click here',
	'auto_redirect' => 'Your browser will redirect you automatically ',
	'database_errno_2003' => 'Unable to connect the database, please check whether the database is available and whether the hosting address is correct',
	'database_errno_1044' => 'Unable to create new database, please check whether the database name is correct',
	'database_errno_1045' => 'Unable to connect the database, please check whether the username or password is correct',
	'database_errno_1064' => 'SQL syntax error',

	'dbpriv_createtable' => 'No CREATE TABLE privileges，the installation cannot be continued',
	'dbpriv_insert' => 'No INSERT privileges，the installation cannot be continued',
	'dbpriv_select' => 'No SELECT privileges，the installation cannot be continued',
	'dbpriv_update' => 'No UPDATE privileges，the installation cannot be continued',
	'dbpriv_delete' => 'No DELETE privileges，the installation cannot be continued',
	'dbpriv_droptable' => 'No DROP TABLE privileges，the installation cannot be continued',

	'db_not_null' => 'UCenter has been installed before, all data will be deleted if you continue the installation',
	'db_drop_table_confirm' => 'Continue the installation will delete all data，are you sure to continue?',

	'writeable' => 'Writable',
	'unwriteable' => 'Unwritable',
	'old_step' => 'Prev',
	'new_step' => 'Next',

	'database_errno_2003' => 'Unable to connect the database, please check whether the database is available and whether the hosting address is correct',
	'database_errno_1044' => 'Unable to create new database, please check whether the database name is correct ',
	'database_errno_1045' => 'Unable to connect the database, please check whether the username or password is correct',
	'database_connect_error' => 'Error connecting the database',

	'step_env_check_title' => 'Start installation',
	'step_env_check_desc' => 'Checking install environment and file permissions',
	'step_db_init_title' => 'Database',
	'step_db_init_desc' => 'Performing database installation',

	'step1_file' => 'Filename',
	'step1_need_status' => 'Status required',
	'step1_status' => 'Current status',
	'not_continue' => 'Please check and amend the sections with red cross, then try again',

	'tips_dbinfo' => 'Fill database information',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'Fill admin information',
	'step_ext_info_title' => 'Installation successful',
	'step_ext_info_comment' => 'Click here to login',

	'ext_info_succ' => 'Installation successful',
	'install_submit' => 'Submit',
	'install_locked' => 'Installation locked, another installation has been performed, to continue please delete<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'You must solve the problem above so the installation can be continued',

	'step_app_reg_title' => 'Environment',
	'step_app_reg_desc' => 'Checking server environment and settings of UCenter',
	'tips_ucenter' => 'Please fill out UCenter information',
	'tips_ucenter_comment' => 'UCenter is the user info management system which can be considered as a passport system, it is a must for all latest comsenz scripts. If you have already installed UCenter，please fill out the following information. You can get latest UCenter at <a href="http://www.discuz.com/" target="blank">Comsenz product centre</a> , international versions can be fetched at <a href="http://www.msg2me.com/" target="blank">Msg2me.com</a>',

	'advice_mysql_connect' => 'Please check if mysql module is loaded correctly',
	'advice_fsockopen' => 'This function needs the allow_url_fopen in php.ini enabled. Please contact the server provider and make sure this setting is enabled',
	'advice_gethostbyname' => 'Is the gethostbyname function being disabled? Please contact the server provider and make sure this setting is enabled',
	'advice_file_get_contents' => 'This function needs the allow_url_fopen in php.ini enabled. Please contact the server provider and make sure this setting is enabled',
	'advice_xml_parser_create' => 'This function needs the allow_url_fopen in php.ini enabled. Please contact the server provider and make sure this setting is enabled',

	'ucurl' => 'UCenter URL',
	'ucpw' => 'Founder Pwd',
	'ucip' => 'UCenter IP',
	'ucenter_ucip_invalid' => 'Wrong format，please fill out the correct IP adress',
	'ucip_comment' => 'In most cases you can keep it blank',

	'tips_siteinfo' => 'Website information',
	'sitename' => 'Website name',
	'siteurl' => 'Website URL',

	'forceinstall' => 'Force install',
	'dbinfo_forceinstall_invalid' => 'Table with the same prefix in the database exists，You should change the prefix to avoid erasing of present data，or choose force  install. Force install will erase all present data and it cannot be recovered',

	'click_to_back' => 'Click to return',
	'adminemail' => 'Admin Email',
	'adminemail_comment' => 'Used to send error report',
	'dbhost_comment' => 'Database address, normally localhost',
	'tablepre_comment' => 'When running multiple forums in the same database，please change prefix',
	'forceinstall_check_label' => 'Yes, delete everything!',

	'uc_url_empty' => 'You have not fill out the UCenter URL，please return and fill',
	'uc_url_invalid' => 'Invalid URL format',
	'uc_url_unreachable' => 'UCenter URL might be wrong，please check',
	'uc_ip_invalid' => 'Cannot resolve this domain，please fill out the IP address',
	'uc_admin_invalid' => 'UCenter founder password incorrect，please fill agian',
	'uc_data_invalid' => 'Communication failed，please check the UCenter URL',
	'uc_dbcharset_incorrect' => 'UCenter character set is different from current character set',
	'uc_api_add_app_error' => 'Error submitting the application to UCenter',
	'uc_dns_error' => 'Error resolving UCenter DNS，please return and refill UCenter IP address',

	'ucenter_ucurl_invalid' => 'UCenter URL empty，or wrong format，please check',
	'ucenter_ucpw_invalid' => 'UCenter Creator password empty，or wrong format，please check',
	'siteinfo_siteurl_invalid' => 'Website URL empty，or wrong format，please check',
	'siteinfo_sitename_invalid' => 'Website name empty，or wrong format，please check',
	'dbinfo_dbhost_invalid' => 'Database host empty，or wrong format，please check',
	'dbinfo_dbname_invalid' => 'Database name empty，or wrong format，please check',
	'dbinfo_dbuser_invalid' => 'Database user name empty，or wrong format，please check',
	'dbinfo_dbpw_invalid' => 'Database password empty，or wrong format，please check',
	'dbinfo_adminemail_invalid' => 'System email empty，or wrong format，please check',
	'dbinfo_tablepre_invalid' => 'Database prefix empty，or wrong format，please check',
	'admininfo_username_invalid' => 'Admin user name empty，or wrong format，please check',
	'admininfo_email_invalid' => 'Admin email empty，or wrong format，please check',
	'admininfo_password_invalid' => 'Admin password empty，or wrong format，please check',
	'admininfo_password2_invalid' => 'Password not match, please check',

	'username' => 'Admin Account',
	'email' => 'Admin Email',
	'password' => 'Admin Password',
	'password_comment' => 'Admin password cannot be empty',
	'password2' => 'Repeat password',

	'admininfo_invalid' => 'Admin information incomplete，please check admin account, password and email',
	'dbname_invalid' => 'Database name empty, please fill',
	'tablepre_invalid' => 'Database prefix empty，or wrong format，please check',
	'admin_username_invalid' => 'Illegal user name，user name cannot be more than 15 letters，and cannot contain special letters, normally alphabets and numbers',
	'admin_password_invalid' => 'Password differs from above, please fill again',
	'admin_email_invalid' => 'Wrong Email address，this email address has been used or has a wrong format，please change to other adresses',
	'admin_invalid' => 'Your admin information is incomplete, please write carefully in each section',
	'admin_exist_password_error' => 'This user already exists，if you want to set this user as admin，please type in the correct password，or please change admin account name',

	'tagtemplates_subject' => 'Subject',
	'tagtemplates_uid' => 'UID',
	'tagtemplates_username' => 'Author',
	'tagtemplates_dateline' => 'Date',
	'tagtemplates_url' => 'Thread address',

	'uc_version_incorrect' => 'Your version of UCenter is out dated，please download the latest version at：http://www.msg2me.com/',
	'config_unwriteable' => 'Install wizard cannot write file, please set config.inc.php permission as writable(777)',

	'install_in_processed' => 'Installing...',
	'install_succeed' => 'Installation successful, click here to next step',
	'install_founder_contact' => 'Please Fill out contact information',

	'init_credits_karma' => 'Karma',
	'init_credits_money' => 'Money',

	'init_group_0' => 'Member',
	'init_group_1' => 'Administrator',
	'init_group_2' => 'Super Moderator',
	'init_group_3' => 'Moderator',
	'init_group_4' => 'Banned to Post',
	'init_group_5' => 'Banned',
	'init_group_6' => 'Banned IP',
	'init_group_7' => 'Guest',
	'init_group_8' => 'Awaiting Verification',
	'init_group_9' => 'Beggar',
	'init_group_10' => 'Newbie',
	'init_group_11' => 'Member',
	'init_group_12' => 'Conqueror',
	'init_group_13' => 'Lord',
	'init_group_14' => 'King',
	'init_group_15' => 'Forum Legend',

	'init_rank_1' => 'Pupil',
	'init_rank_2' => 'Frequent Poster',
	'init_rank_3' => 'Super Poster',
	'init_rank_4' => 'Freelance Writer',
	'init_rank_5' => 'Special Guest',

	'init_cron_1' => 'Clean Number of Daily Posts',
	'init_cron_2' => 'Clean Monthly Online Time',
	'init_cron_3' => 'Clean Daily Data',
	'init_cron_4' => 'Birthday Statistics and Email',
	'init_cron_5' > 'Topic Reply Notification',
	'init_cron_6' => 'Clean Daily Announcements',
	'init_cron_7' => 'Clean Time Limited Operations',
	'init_cron_8' => 'Clean Forum Promotion',
	'init_cron_9' => 'Clean Monthly Threads',
	'init_cron_10' => 'Daily X-Space User Update',
	'init_cron_11' => 'Weekly Threads Update',

	'init_bbcode_1' => 'Make the contents being scrolled horizontally，This effect is similar to the HTML The marquee Tags，Note: This effect is only for Internet Explorer.',
	'init_bbcode_2' => 'Insert Flash Animation',
	'init_bbcode_3' => 'Shows QQ online status，click this icon to chat with him/her',
	'init_bbcode_4' => 'Superscript',
	'init_bbcode_5' => 'Subscript',
	'init_bbcode_6' => 'Insert Windows media Audio',
	'init_bbcode_7' => 'Insert Windows media Video',

	'init_qihoo_searchboxtxt' =>'Enter keywords for a quick search',
	'init_threadsticky' =>'Global Stick, Catogeral Stick, Sectional Stick',

	'init_default_style' => 'Default Style',
	'init_default_forum' => 'Default Forum',
	'init_default_template' => 'Default Template',
	'init_default_template_copyright' => 'Comsenz (Beijing) Technology Co Ltd.',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => 'Advertising/SPAM\r\nFlooding\r\nIllegal Content\r\nIrrelevant\r\nRepatition\r\n\r\nThanks for Sharing\r\nFine Article\r\nOriginal Content',
	'init_link' => 'Discuz! Official Forum',
	'init_link_note' => 'Provides latest information about Discuz!',

	'license' => '<div class="license"><h1>English Version of EULA, for non-Chinese-Speaking Users Only</h1>
	
	
	
<p>This version of English Discuz! is translated by Msg2me, the official translation team of Comsenz products, please visit <a href="http://www.msg2me.com/" target="blank">Msg2me.com</a> to get more packages and updates.</p>

<p>Copyright (c) 2001-2009，Comsenz (Beijing) Technology Co. Ltd. All rights reserved.</p>

<h3>IMPORTANT: THIS SOFTWARE END USER LICENSE AGREEMENT("EULA") IS A LEGAL AGREEMENT BETWEEN YOU AND Comsenz Inc.. READ IT CAREFULLY BEFORE COMPLETING THE INSTALLATION PROCESS AND USING THE SOFTWARE. IT PROVIDES A LICENSE TO USE THE SOFTWARE AND CONTAINS WARRANTY INFORMATION AND LIABILITY DISCLAIMERS. BY INSTALLING AND USING THE SOFTWARE, YOU ARE CONFIRMING YOUR ACCEPTANCE OF THE SOFTWARE AND AGREEING TO BECOME BOUND BY THE TERMS OF THIS AGREEMENT. IF YOU DO NOT AGREE TO BE BOUND BY THESE TERMS, PLEASE DO NOT INSTALL OR USE THE SOFTWARE. YOU MUST ASSUME THE ENTIRE RISK OF USING THIS PROGRAM. ANY LIABILITY OF Comsenz Inc. WILL BE LIMITED EXCLUSIVELY TO PRODUCT REPLACEMENT OR REFUND OF PURCHASE PRICE BEFORE FIRST INSTALLATION. </h3>

<h3>THIS EULA SHALL APPLY ONLY TO THE CROSSDAY DISCUZ! BOARD SOFTWARE VERSION 7.x.x HEREWITH REGARDLESS OF WHETHER OTHER SOFTWARE IS REFERRED TO OR DESCRIBED HEREIN. Comsenz Inc. RETAINS OWNERSHIP OF THE SOFTWARE AND ANY COPIES OF IT, REGARDLESS OF THE FORM IN WHICH THE COPIES MAY EXIST.</h3>



<h3>I. Definitions</h3>
<ol>
<li>"Crossday Discuz! Board"("Discuz!" for short) is a bulletin board system which is developed by Comsenz Inc..</li>
<li>"the Software" means "Crossday Discuz! Board".</li>
<li>"Comsenz Inc." is the enterprise being responsible for Discuz! product.</li>
<li>"Msg2me" - Comsenz (Discuz) Official Multilingual Support Team (http://www.msg2me.com), is a volunteer-driven quality-oriented software translation effort which anticipates that the value it provides to the community will result in contributions to keep it alive. All the translators do their work on Msg2me projects in their spare time. All msg2me translations are not allowed for commercial use without written permission, including but not limited to Comsenz and or any other parties.</li>
</ol>




<h3>II. License Grants</h3> 
<ol>

<li>You may use the Software for free for non-commercial use under the License Restrictions.</li>
<li>You may modify the source code(if being provieded) or interface of the Software to fit your website under the License Restrictions.</li>
<li>You have property of all members’ information and articles in the Bulletin Board powered by the Software; meanwhile, you need assume all relevant legal duty by yourself.</li>
<li>You may use the Software for commercial use after purchasing the commercial license. Moreover, according to the license you purchased you may get specified term, manner and content of technical support from Comsenz Inc. Commercial users are prior to submiting ideas and opinions to Comsenz Inc., but without any guarantee of acceptance.</li>
</ol>




<h3>III. License Restrictions</h3>
<ol>

<li>You may not use the Software for commercial use or profit use, unless you have been licensed to. To purchase the license, please visit http://www.discuz.com or dial 8610-5165 7885 for more information.</li>
<li>You may not rent, lease, sublicense, sell, assign, pledge the Software and its services.</li>
<li>You may not remove or modify the copyright information and relevant links, such as http://www.comsenz.com, http://www.discuz.com and http://www.discuz.net, in the footer of board pages without the prior written consent of Comsenz Inc., no matter how heavily you modified the Software.</li>
<li>Upon usage of msg2me multilingual translations [english and all other language versions provided by Msg2me], you may not remove or modify the copyright information and relevant links, such as http://www.msg2me.com, in the footer of all web pages without the prior written consent of msg2me.com, no matter how heavily you modified the Software.</li>
<li>You may not modify the Software to create derivative works for redistribution based upon the Software.</li>
<li>In the event that you fail to comply with this EULA, your license will be terminated.</li>
</ol>



<h3>IV. LIMITED WARRANTY AND DISCLAIMER</h3>
<ol>


<li>THE SOFTWARE AND THE ACCOMPANYING FILES ARE SOLD "AS IS" AND WITHOUT WARRANTIES AS TO PERFORMANCE OF MERCHANTABILITY OR ANY OTHER WARRANTIED WHETHER EXPRESSED OR IMPLIED.</li>
<li>Comsenz Inc. is not liable for the content of any message posted on the forums powered by the Software.</li>
<li>You must assume the entire risk of using the Software. ANY LIABILITY OF Comsenz Inc. WILL BE LIMITED EXCLUSIVELY TO PRODUCT REPLACEMENT, REFUND OF PURCHASE PRICE BEFORE YOUR FIRST INSTALLATION.</li>
</ol>



<h3>V. Official Websites</h3>
<ol>

<li>Comsenz Inc.: http://www.comsenz.com.</li>
<li>Discuz! Home: http://www.discuz.com</li>
<li>Discuz! Community: http://www.discuz.net</li>
<li>Comsenz Official Multilingual Support: http://www.msg2me.com</li>
</ol>


<p>Comsenz Inc. reserves the right to modify this EULA. Discuz! Home provides offical information on license and price, Comsenz Inc. may modify them without notice. Modified license and price list will apply to new licensed users.</p></div>',

	'uc_installed' => 'You have installed UCenter before，if you want to reinstall，please delete data/install.lock ',
	'i_agree' => 'I have read the Terms & Conditions and I accept',
	'supportted' => 'Supported',
	'unsupportted' => 'Unsupported',
	'max_size' => 'Supported/Max size',
	'project' => 'Project',
	'ucenter_required' => 'Required',
	'ucenter_best' => 'Recommended',
	'curr_server' => 'Current',
	'env_check' => 'Environment check',
	'os' => 'Operating system',
	'php' => 'PHP version',
	'attachmentupload' => 'Attachment',
	'unlimit' => 'Unlimited',
	'version' => 'Version',
	'gdversion' => 'GD Library',
	'allow' => 'Allowed',
	'unix' => 'Unix',
	'diskspace' => 'Storage space',
	'priv_check' => 'Directory/file permission check',
	'func_depend' => 'Function dependence check',
	'func_name' => 'Function name',
	'check_result' => 'Check result',
	'suggestion' => 'Suggestion',
	'advice_mysql' => 'Please check if the mysql module is correctly loaded',
	'advice_fopen' => 'This function needs allow_url_fopen in php.ini enabled. Please contact host provider，make sure this setting is enabled',
	'advice_file_get_contents' => 'This function needs allow_url_fopen in php.ini enabled. Please contact host provider，make sure this setting is enabled',
	'advice_xml' => 'This function needs XML support from PHP. Please contact host provider，make sure this setting is enabled',
	'none' => 'None',

	'dbhost' => 'DB Server',
	'dbuser' => 'DB Username',
	'dbpw' => 'DB Password',
	'dbname' => 'DB Name',
	'tablepre' => 'Table Prefix',

	'ucfounderpw' => 'Creator Password',
	'ucfounderpw2' => 'Repeat Creator Password',

	'init_log' => 'Initializing log',
	'clear_dir' => 'Empty directory',
	'select_db' => 'Select database',
	'create_table' => 'Create tables',
	'succeed' => 'Succeed',

	'testdata' => 'Install testing data',
	'testdata_check_label' => 'Yes',
	'install_test_data' => 'Installing testing data',

	'method_undefined' => 'Method undefined',
	'database_nonexistence' => 'Database operating object does not exist',
	'founder_contact' => '<h4>Information About <b>Comsenz Improvement Plan</b></h4>


	In order to improve product quality and User experience, Discuz!7.2 promoted  the <b>Comsenz Improvement Plan</b>, it will help us analyze the habits of forum users thus we can improve our products to satisfy the need of users.<br>


This system will not collect sensitive information and user information from websites, so not safety concerns exist, it is tested in various conditions and will not interfere with forum functionality.<br>


If you use this version of product, you have accepted to participate the "Comsenz Improvement Plan", the operating deparment will advise you based on the information analysis, such as enabling certain functions based on server status, providing suitable forum settings and some other experience of running forums.<br>


	In order to discuss operatiion tactics with you, please leave your often used contact information.',
	'skip_current' => 'Skip',

);

$msglang = array(

	'config_nonexistence' => 'Your config.inc.php does not exist, installation cancelled, please upload it by FTP and try again',
);

$optionlist = array (
	8 => array (
		'classid' => '1',
		'displayorder' => '2',
		'title' => '性别',
		'identifier' => 'gender',
		'type' => 'radio',
		'rules' => array (
			      'required' => '0',
			      'unchangeable' => '0',
			      'choices' => "1=男\r\n2=女",
			   ),
		),
	16 => array (
		'classid' => '2',
		'displayorder' => '0',
		'title' => '房屋类型',
		'identifier' => 'property',
		'type' => 'select',
		'rules' => array (
			      'choices' => "1=写字楼\r\n2=公寓\r\n3=小区\r\n4=平房\r\n5=别墅\r\n6=地下室",
			   ),
		),
	17 => array (
		'classid' => '2',
		'displayorder' => '0',
		'title' => '座向',
		'identifier' => 'face',
		'type' => 'radio',
	    	'rules' => array (
	      			'required' => '0',
	      			'unchangeable' => '0',
	      			'choices' => "1=南向\r\n2=北向\r\n3=西向\r\n4=东向",
	    		),
	  	),
      18 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '装修情况',
        	'identifier' => 'makes',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=无装修\r\n2=简单装修\r\n3=精装修",
        		),
      	),
      19 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '居室',
        	'identifier' => 'mode',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=独居\r\n2=两居室\r\n3=三居室\r\n4=四居室\r\n5=别墅",
        		),
      	),
      23 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '屋内设施',
        	'identifier' => 'equipment',
        	'type' => 'checkbox',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=水电\r\n2=宽带\r\n3=管道气\r\n4=有线电视\r\n5=电梯\r\n6=电话\r\n7=冰箱\r\n8=洗衣机\r\n9=热水器\r\n10=空调\r\n11=暖气\r\n12=微波炉\r\n13=油烟机\r\n14=饮水机",
       		),
      	),
      25 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '是否中介',
        	'identifier' => 'bool',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=是\r\n2=否",
        		),
      	),
      27 => array (
        	'classid' => '3',
       	'displayorder' => '0',
        	'title' => '星座',
        	'identifier' => 'Horoscope',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=白羊座\r\n2=金牛座\r\n3=双子座\r\n4=巨蟹座\r\n5=狮子座\r\n6=处女座\r\n7=天秤座\r\n8=天蝎座\r\n9=射手座\r\n10=摩羯座\r\n11=水瓶座\r\n12=双鱼座",
        		),
      	),
      30 => array (
        	'classid' => '3',
        	'displayorder' => '0',
        	'title' => '婚姻状况',
        	'identifier' => 'marrige',
        	'type' => 'radio',
        	'rules' => array (
          			'choices' => "1=已婚\r\n2=未婚",
        		),
      	),
      31 => array (
        	'classid' => '3',
        	'displayorder' => '0',
        	'title' => '爱好',
        	'identifier' => 'hobby',
        	'type' => 'checkbox',
        	'rules' => array (
          			'choices' => "1=美食\r\n2=唱歌\r\n3=跳舞\r\n4=电影\r\n5=音乐\r\n6=戏剧\r\n7=聊天\r\n8=拍托\r\n9=电脑\r\n10=网络\r\n11=游戏\r\n12=绘画\r\n13=书法\r\n14=雕塑\r\n15=异性\r\n16=阅读\r\n17=运动\r\n18=旅游\r\n19=八卦\r\n20=购物\r\n21=赚钱\r\n22=汽车\r\n23=摄影",
        		),
      	),
      32 => array (
        	'classid' => '3',
        	'displayorder' => '0',
        	'title' => '收入范围',
        	'identifier' => 'salary',
        	'type' => 'select',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=保密\r\n2=800元以上\r\n3=1500元以上\r\n4=2000元以上\r\n5=3000元以上\r\n6=5000元以上\r\n7=8000元以上",
        		),
      	),
      34 => array (
        	'classid' => '1',
        	'displayorder' => '0',
        	'title' => '学历',
        	'identifier' => 'education',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=文盲\r\n2=小学\r\n3=初中\r\n4=高中\r\n5=中专\r\n6=大专\r\n7=本科\r\n8=研究生\r\n9=博士",
        		),
      	),
      38 => array (
        	'classid' => '5',
        	'displayorder' => '0',
        	'title' => '席别',
        	'identifier' => 'seats',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=站票\r\n2=硬座\r\n3=软座\r\n4=硬卧\r\n5=软卧",
        		),
      	),
      44 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '是否应届',
        	'identifier' => 'recr_term',
        	'type' => 'radio',
        	'rules' => array (
    		      	'required' => '0',
    		      	'unchangeable' => '0',
    		      	'choices' => "1=应届\r\n2=非应届",
        		),
      	),
      48 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '薪金',
        	'identifier' => 'recr_salary',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=面议\r\n2=1000以下\r\n3=1000~1500\r\n4=1500~2000\r\n5=2000~3000\r\n6=3000~4000\r\n7=4000~6000\r\n8=6000~8000\r\n9=8000以上",
        		),
      	),
      50 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '工作性质',
        	'identifier' => 'recr_work',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=全职\r\n2=兼职",
        		),
      	),
      53 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '性别要求',
        	'identifier' => 'recr_sex',
        	'type' => 'checkbox',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=男\r\n2=女",
        		),
      	),
      62 => array (
        	'classid' => '5',
        	'displayorder' => '0',
        	'title' => '付款方式',
        	'identifier' => 'pay_type',
        	'type' => 'checkbox',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=电汇\r\n2=支付宝\r\n3=现金\r\n4=其他",
        		),
      	),
);

$request_data = array (
  '边栏模块_版块树形列表' =>
  array (
    'url' => 'function=module&module=forumtree.inc.php&settings=N%3B&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'forumtree.inc.php',
      'cachelife' => '864000',
      'jscharset' => '0',
    ),
    'comment' => '边栏版块树形列表模块',
    'type' => '5',
  ),
  '边栏模块_版主排行' =>
  array (
    'url' => 'function=module&module=modlist.inc.php&settings=N%3B&jscharset=0&cachelife=3600',
    'parameter' =>
    array (
      'module' => 'modlist.inc.php',
      'cachelife' => '3600',
      'jscharset' => '0',
    ),
    'comment' => '边栏版主排行模块',
    'type' => '5',
  ),
  '聚合模块_版块列表' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A1%3A%7Bs%3A4%3A%22data%22%3Bs%3A58%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%B0%E6%BF%E9%C5%C5%D0%D0%2C%B0%E6%BF%E9%C5%C5%D0%D0%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%B0%E6%BF%E9%CA%F7%D0%CE%C1%D0%B1%ED%2C%B0%E6%BF%E9%C1%D0%B1%ED%22%3B%7D&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '864000',
      'settings' =>
      array (
        'data' => '边栏模块_版块排行,版块排行
边栏模块_版块树形列表,版块列表',
      ),
      'jscharset' => '0',
    ),
    'comment' => '热门版块、版块树形聚合模块',
    'type' => '5',
  ),
  '边栏模块_版块排行' =>
  array (
    'url' => 'function=forums&startrow=0&items=0&newwindow=1&orderby=posts&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B0%E6%BF%E9%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%3Cimg%20style%3D%5C%22vertical-align%3Amiddle%5C%22%20src%3D%5C%22images%2Fdefault%2Ftree_file.gif%5C%22%20%2F%3E%20%7Bforumname%7D%28%7Bposts%7D%29%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>版块排行</h4>
<ul class=\\"textinfolist\\">
[node]<li><img style=\\"vertical-align:middle\\" src=\\"images/default/tree_file.gif\\" /> {forumname}({posts})</li>[/node]
</ul>
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '0',
      'newwindow' => 1,
      'orderby' => 'posts',
      'jscharset' => '0',
    ),
    'comment' => '边栏版块排行模块',
    'type' => '1',
  ),
  '聚合模块_热门主题' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A2%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%C8%C8%C3%C5%D6%F7%CC%E2%22%3Bs%3A4%3A%22data%22%3Bs%3A79%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%BD%F1%C8%D5%2C%C8%D5%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%B1%BE%D6%DC%2C%D6%DC%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%B1%BE%D4%C2%2C%D4%C2%22%3B%7D&jscharset=0&cachelife=1800',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '1800',
      'settings' =>
      array (
        'title' => '热门主题',
        'data' => '边栏模块_热门主题_今日,日
边栏模块_热门主题_本周,周
边栏模块_热门主题_本月,月',
      ),
      'jscharset' => '0',
    ),
    'comment' => '今日、本周、本月热门主题聚合模块',
    'type' => '5',
  ),
  '边栏模块_热门主题_本月' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=hourviews&hours=720&jscharset=0&cachelife=86400&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D4%C2%C8%C8%C3%C5%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本月热门</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '86400',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'hourviews',
      'hours' => '720',
      'jscharset' => '0',
    ),
    'comment' => '边栏本月热门主题模块',
    'type' => '0',
  ),
  '聚合模块_会员排行' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A2%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%BB%E1%D4%B1%C5%C5%D0%D0%22%3Bs%3A4%3A%22data%22%3Bs%3A79%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%BB%E1%D4%B1%C5%C5%D0%D0_%BD%F1%C8%D5%2C%C8%D5%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%BB%E1%D4%B1%C5%C5%D0%D0_%B1%BE%D6%DC%2C%D6%DC%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%BB%E1%D4%B1%C5%C5%D0%D0_%B1%BE%D4%C2%2C%D4%C2%22%3B%7D&jscharset=0&cachelife=3600',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '3600',
      'settings' =>
      array (
        'title' => '会员排行',
        'data' => '边栏模块_会员排行_今日,日
边栏模块_会员排行_本周,周
边栏模块_会员排行_本月,月',
      ),
      'jscharset' => '0',
    ),
    'comment' => '今日、本周、本月会员排行聚合模块',
    'type' => '5',
  ),
  '边栏模块_推荐主题' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=1&newwindow=1&threadtype=0&highlight=0&orderby=lastpost&hours=48&jscharset=0&cachelife=3600&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%CD%C6%BC%F6%D6%F7%CC%E2%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>推荐主题</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '3600',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '1',
      'newwindow' => 1,
      'orderby' => 'lastpost',
      'hours' => '48',
      'jscharset' => '0',
    ),
    'comment' => '边栏推荐主题模块',
    'type' => '0',
  ),
  '边栏模块_最新图片' =>
  array (
    'url' => 'function=images&sidestatus=0&isimage=1&threadmethod=1&maxwidth=140&maxheight=140&startrow=0&items=5&orderby=dateline&hours=0&digest=0&newwindow=1&jscharset=0&jstemplate=%3Cdiv%20%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%CD%BC%C6%AC%3C%2Fh4%3E%0D%0A%3Cscript%20type%3D%5C%22text%2Fjavascript%5C%22%3E%0D%0Avar%20slideSpeed%20%3D%202500%3B%0D%0Avar%20slideImgsize%20%3D%20%5B140%2C140%5D%3B%0D%0Avar%20slideTextBar%20%3D%200%3B%0D%0Avar%20slideBorderColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0Avar%20slideBgColor%20%3D%20%5C%27%23FFF%5C%27%3B%0D%0Avar%20slideImgs%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgLinks%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgTexts%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideSwitchBar%20%3D%201%3B%0D%0Avar%20slideSwitchColor%20%3D%20%5C%27black%5C%27%3B%0D%0Avar%20slideSwitchbgColor%20%3D%20%5C%27white%5C%27%3B%0D%0Avar%20slideSwitchHiColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0A%5Bnode%5D%0D%0AslideImgs%5B%7Border%7D%5D%20%3D%20%5C%22%7Bimgfile%7D%5C%22%3B%0D%0AslideImgLinks%5B%7Border%7D%5D%20%3D%20%5C%22%7Blink%7D%5C%22%3B%0D%0AslideImgTexts%5B%7Border%7D%5D%20%3D%20%5C%22%7Bsubject%7D%5C%22%3B%0D%0A%5B%2Fnode%5D%0D%0A%3C%2Fscript%3E%0D%0A%3Cscript%20language%3D%5C%22javascript%5C%22%20type%3D%5C%22text%2Fjavascript%5C%22%20src%3D%5C%22include%2Fjs%2Fslide.js%5C%22%3E%3C%2Fscript%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div  class=\\"sidebox\\">
<h4>最新图片</h4>
<script type=\\"text/javascript\\">
var slideSpeed = 2500;
var slideImgsize = [140,140];
var slideTextBar = 0;
var slideBorderColor = \\\'#C8DCEC\\\';
var slideBgColor = \\\'#FFF\\\';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchBar = 1;
var slideSwitchColor = \\\'black\\\';
var slideSwitchbgColor = \\\'white\\\';
var slideSwitchHiColor = \\\'#C8DCEC\\\';
[node]
slideImgs[{order}] = \\"{imgfile}\\";
slideImgLinks[{order}] = \\"{link}\\";
slideImgTexts[{order}] = \\"{subject}\\";
[/node]
</script>
<script language=\\"javascript\\" type=\\"text/javascript\\" src=\\"include/js/slide.js\\"></script>
</div>',
      'cachelife' => '',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'isimage' => '1',
      'maxwidth' => '140',
      'maxheight' => '140',
      'threadmethod' => '1',
      'newwindow' => 1,
      'orderby' => 'dateline',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '边栏最新图片展示模块',
    'type' => '4',
  ),
  '边栏模块_最新主题' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=dateline&hours=0&jscharset=0&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%D6%F7%CC%E2%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>最新主题</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'dateline',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '边栏最新主题模块',
    'type' => '0',
  ),
  '边栏模块_活跃会员' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=12&newwindow=1&extcredit=1&orderby=posts&hours=0&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%BB%EE%D4%BE%BB%E1%D4%B1%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22avt_list%20s_clear%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bavatarsmall%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>活跃会员</h4>
<ul class=\\"avt_list s_clear\\">
[node]<li>{avatarsmall}</li>[/node]
</ul>
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '12',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'posts',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '边栏活跃会员模块',
    'type' => '2',
  ),
  '边栏模块_热门主题_本版' =>
  array (
    'url' => 'function=threads&sidestatus=1&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=replies&hours=0&jscharset=0&cachelife=1800&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%B0%E6%C8%C8%C3%C5%D6%F7%CC%E2%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本版热门主题</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '1800',
      'sidestatus' => '1',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'replies',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '边栏本版热门主题模块',
    'type' => '0',
  ),
  '边栏模块_热门主题_今日' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=hourviews&hours=24&jscharset=0&cachelife=1800&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%BD%F1%C8%D5%C8%C8%C3%C5%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>今日热门</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '1800',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'hourviews',
      'hours' => '24',
      'jscharset' => '0',
    ),
    'comment' => '边栏今日热门主题模块',
    'type' => '0',
  ),
  '边栏模块_最新回复' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=lastpost&hours=0&jscharset=0&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%BB%D8%B8%B4%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>最新回复</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'lastpost',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '边栏最新回复模块',
    'type' => '0',
  ),
  '边栏模块_最新图片_本版' =>
  array (
    'url' => 'function=images&sidestatus=1&isimage=1&threadmethod=1&maxwidth=140&maxheight=140&startrow=0&items=5&orderby=dateline&hours=0&digest=0&newwindow=1&jscharset=0&jstemplate=%3Cdiv%20%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%CD%BC%C6%AC%3C%2Fh4%3E%0D%0A%3Cscript%20type%3D%5C%22text%2Fjavascript%5C%22%3E%0D%0Avar%20slideSpeed%20%3D%202500%3B%0D%0Avar%20slideImgsize%20%3D%20%5B140%2C140%5D%3B%0D%0Avar%20slideTextBar%20%3D%200%3B%0D%0Avar%20slideBorderColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0Avar%20slideBgColor%20%3D%20%5C%27%23FFF%5C%27%3B%0D%0Avar%20slideImgs%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgLinks%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgTexts%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideSwitchBar%20%3D%201%3B%0D%0Avar%20slideSwitchColor%20%3D%20%5C%27black%5C%27%3B%0D%0Avar%20slideSwitchbgColor%20%3D%20%5C%27white%5C%27%3B%0D%0Avar%20slideSwitchHiColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0A%5Bnode%5D%0D%0AslideImgs%5B%7Border%7D%5D%20%3D%20%5C%22%7Bimgfile%7D%5C%22%3B%0D%0AslideImgLinks%5B%7Border%7D%5D%20%3D%20%5C%22%7Blink%7D%5C%22%3B%0D%0AslideImgTexts%5B%7Border%7D%5D%20%3D%20%5C%22%7Bsubject%7D%5C%22%3B%0D%0A%5B%2Fnode%5D%0D%0A%3C%2Fscript%3E%0D%0A%3Cscript%20language%3D%5C%22javascript%5C%22%20type%3D%5C%22text%2Fjavascript%5C%22%20src%3D%5C%22include%2Fjs%2Fslide.js%5C%22%3E%3C%2Fscript%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div  class=\\"sidebox\\">
<h4>最新图片</h4>
<script type=\\"text/javascript\\">
var slideSpeed = 2500;
var slideImgsize = [140,140];
var slideTextBar = 0;
var slideBorderColor = \\\'#C8DCEC\\\';
var slideBgColor = \\\'#FFF\\\';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchBar = 1;
var slideSwitchColor = \\\'black\\\';
var slideSwitchbgColor = \\\'white\\\';
var slideSwitchHiColor = \\\'#C8DCEC\\\';
[node]
slideImgs[{order}] = \\"{imgfile}\\";
slideImgLinks[{order}] = \\"{link}\\";
slideImgTexts[{order}] = \\"{subject}\\";
[/node]
</script>
<script language=\\"javascript\\" type=\\"text/javascript\\" src=\\"include/js/slide.js\\"></script>
</div>',
      'cachelife' => '',
      'sidestatus' => '1',
      'startrow' => '0',
      'items' => '5',
      'isimage' => '1',
      'maxwidth' => '140',
      'maxheight' => '140',
      'threadmethod' => '1',
      'newwindow' => 1,
      'orderby' => 'dateline',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '边栏本版最新图片展示模块',
    'type' => '4',
  ),
  '边栏模块_标签' =>
  array (
    'url' => 'function=module&module=tag.inc.php&settings=a%3A1%3A%7Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2220%22%3B%7D&jscharset=0&cachelife=900',
    'parameter' =>
    array (
      'module' => 'tag.inc.php',
      'cachelife' => '900',
      'settings' =>
      array (
        'limit' => '20',
      ),
      'jscharset' => '0',
    ),
    'comment' => '边栏标签模块',
    'type' => '5',
  ),
  '边栏模块_会员排行_本月' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=5&newwindow=1&extcredit=1&orderby=hourposts&hours=720&jscharset=0&cachelife=86400&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D4%C2%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%5Bnode%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3Bmargin%3A%200%2016px%205px%200%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%7Bmember%7D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本月排行</h4>
[node]<div class=\\"s_clear\\" style=\\"margin-bottom: 5px;\\"><div style=\\"margin-right: 10px; float: left;\\">{avatarsmall}</div><p>{member}</p><p>发帖 {value} 篇</p></div>[/node]
</div>',
      'cachelife' => '86400',
      'startrow' => '0',
      'items' => '5',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '720',
      'jscharset' => '0',
    ),
    'comment' => '边栏会员本月发帖排行模块',
    'type' => '2',
  ),
  '边栏模块_会员排行_本周' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=5&newwindow=1&extcredit=1&orderby=hourposts&hours=168&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D6%DC%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%5Bnode%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3Bmargin%3A%200%2016px%205px%200%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%7Bmember%7D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本周排行</h4>
[node]<div class=\\"s_clear\\" style=\\"margin-bottom: 5px;\\"><div style=\\"margin-right: 10px; float: left;\\">{avatarsmall}</div><p>{member}</p><p>发帖 {value} 篇</p></div>[/node]
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '5',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '168',
      'jscharset' => '0',
    ),
    'comment' => '边栏会员本周发帖排行模块',
    'type' => '2',
  ),
   '边栏方案_主题列表页默认' =>
  array (
    'url' => 'function=side&jscharset=&jstemplate=%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%CE%D2%B5%C4%D6%FA%CA%D6%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%B1%BE%B0%E6%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%B0%E6%BF%E9%C5%C5%D0%D0%5B%2Fmodule%5D',
    'parameter' =>
    array (
      'selectmodule' =>
      array (
        1 => '边栏模块_我的助手',
        2 => '边栏模块_热门主题_本版',
        3 => '边栏模块_版块排行',
      ),
      'cachelife' => 0,
      'jstemplate' => '[module]边栏模块_我的助手[/module]<hr class="shadowline"/>[module]边栏模块_热门主题_本版[/module]<hr class="shadowline"/>[module]边栏模块_版块排行[/module]',
    ),
    'comment' => NULL,
    'type' => '-2',
  ),
  '边栏方案_首页默认' =>
  array (
    'url' => 'function=side&jscharset=&jstemplate=%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%CE%D2%B5%C4%D6%FA%CA%D6%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%BE%DB%BA%CF%C4%A3%BF%E9_%D0%C2%CC%FB%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%BE%DB%BA%CF%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%BB%EE%D4%BE%BB%E1%D4%B1%5B%2Fmodule%5D',
    'parameter' =>
    array (
      'selectmodule' =>
      array (
        1 => '边栏模块_我的助手',
        2 => '聚合模块_新帖',
        3 => '聚合模块_热门主题',
        4 => '边栏模块_活跃会员',
      ),
      'cachelife' => 0,
      'jstemplate' => '[module]边栏模块_我的助手[/module]<hr class="shadowline"/>[module]聚合模块_新帖[/module]<hr class="shadowline"/>[module]聚合模块_热门主题[/module]<hr class="shadowline"/>[module]边栏模块_活跃会员[/module]',
    ),
    'comment' => NULL,
    'type' => '-2',
  ),
  '聚合模块_新帖' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A2%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%D7%EE%D0%C2%CC%FB%D7%D3%22%3Bs%3A4%3A%22data%22%3Bs%3A46%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%D7%EE%D0%C2%D6%F7%CC%E2%2C%D6%F7%CC%E2%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%D7%EE%D0%C2%BB%D8%B8%B4%2C%BB%D8%B8%B4%22%3B%7D&jscharset=0',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '',
      'settings' =>
      array (
        'title' => '最新帖子',
        'data' => '边栏模块_最新主题,主题
边栏模块_最新回复,回复',
      ),
      'jscharset' => '0',
    ),
    'comment' => '最新主题、最新回复聚合模块',
    'type' => '5',
  ),
  '边栏模块_热门主题_本周' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=hourviews&hours=168&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D6%DC%C8%C8%C3%C5%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本周热门</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '43200',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'hourviews',
      'hours' => '168',
      'jscharset' => '0',
    ),
    'comment' => '边栏本周热门主题模块',
    'type' => '0',
  ),
  '边栏模块_会员排行_今日' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=5&newwindow=1&extcredit=1&orderby=hourposts&hours=24&jscharset=0&cachelife=3600&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%BD%F1%C8%D5%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%5Bnode%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3Bmargin%3A%200%2016px%205px%200%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%7Bmember%7D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>今日排行</h4>
[node]<div class=\\"s_clear\\" style=\\"margin-bottom: 5px;\\"><div style=\\"margin-right: 10px; float: left;\\">{avatarsmall}</div><p>{member}</p><p>发帖 {value} 篇</p></div>[/node]
</div>',
      'cachelife' => '3600',
      'startrow' => '0',
      'items' => '5',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '24',
      'jscharset' => '0',
    ),
    'comment' => '边栏会员今日发帖排行模块',
    'type' => '2',
  ),
  '边栏模块_论坛之星' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=3&newwindow=1&extcredit=1&orderby=hourposts&hours=168&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D6%DC%D6%AE%D0%C7%3C%2Fh4%3E%0D%0A%5Bnode%5D%0D%0A%5Bshow%3D1%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3B%20margin-right%3A%2016px%3B%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%5B%2Fshow%5D%7Bmember%7D%20%5Bshow%3D1%5D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%3Cdiv%20style%3D%5C%22clear%3Aboth%3Bmargin-top%3A2px%5C%22%20%2F%3E%3C%2Fdiv%3E%5B%2Fshow%5D%0D%0A%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox s_clear\\">
<h4>本周之星</h4>
[node]
[show=1]<div style=\\"clear:both\\"><div style=\\"float:left; margin-right: 16px;\\">{avatarsmall}</div>[/show]{member} [show=1]<br />发帖 {value} 篇</div><div style=\\"clear:both;margin-top:2px\\" /></div>[/show]
[/node]
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '3',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '168',
      'jscharset' => '0',
    ),
    'comment' => '边栏论坛之星模块',
    'type' => '2',
  ),
  '边栏模块_我的助手' =>
  array (
    'url' => 'function=module&module=assistant.inc.php&settings=N%3B&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'assistant.inc.php',
      'cachelife' => '0',
      'jscharset' => '0',
    ),
    'comment' => '边栏我的助手模块',
    'type' => '5',
  ),
  '边栏模块_Google搜索' =>
  array (
    'url' => 'function=module&module=google.inc.php&settings=a%3A2%3A%7Bs%3A4%3A%22lang%22%3Bs%3A0%3A%22%22%3Bs%3A7%3A%22default%22%3Bs%3A1%3A%221%22%3B%7D&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'google.inc.php',
      'cachelife' => '864000',
      'settings' =>
      array (
        'lang' => '',
        'default' => '1',
      ),
      'jscharset' => '0',
    ),
    'comment' => '边栏 Google 搜索模块',
    'type' => '5',
  ),
  'UCHome_最新动态' =>
  array (
    'url' => 'function=module&module=feed.inc.php&settings=a%3A6%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%D7%EE%D0%C2%B6%AF%CC%AC%22%3Bs%3A4%3A%22uids%22%3Bs%3A0%3A%22%22%3Bs%3A6%3A%22friend%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22start%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2210%22%3Bs%3A8%3A%22template%22%3Bs%3A54%3A%22%3Cdiv%20style%3D%5C%22padding-left%3A2px%5C%22%3E%7Btitle_template%7D%3C%2Fdiv%3E%22%3B%7D&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'feed.inc.php',
      'cachelife' => '0',
      'settings' =>
      array (
        'title' => '最新动态',
        'uids' => '',
        'friend' => '0',
        'start' => '0',
        'limit' => '10',
        'template' => '<div style=\\"padding-left:2px\\">{title_template}</div>',
      ),
      'jscharset' => '0',
    ),
    'comment' => '获取UCHome的最新动态',
    'type' => '5',
  ),
  'UCHome_最新更新空间' =>
  array (
    'url' => 'function=module&module=space.inc.php&settings=a%3A17%3A%7Bs%3A5%3A%22title%22%3Bs%3A12%3A%22%D7%EE%D0%C2%B8%FC%D0%C2%BF%D5%BC%E4%22%3Bs%3A3%3A%22uid%22%3Bs%3A0%3A%22%22%3Bs%3A14%3A%22startfriendnum%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22endfriendnum%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22startviewnum%22%3Bs%3A0%3A%22%22%3Bs%3A10%3A%22endviewnum%22%3Bs%3A0%3A%22%22%3Bs%3A11%3A%22startcredit%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22endcredit%22%3Bs%3A0%3A%22%22%3Bs%3A6%3A%22avatar%22%3Bs%3A2%3A%22-1%22%3Bs%3A10%3A%22namestatus%22%3Bs%3A2%3A%22-1%22%3Bs%3A8%3A%22dateline%22%3Bs%3A1%3A%220%22%3Bs%3A10%3A%22updatetime%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22order%22%3Bs%3A10%3A%22updatetime%22%3Bs%3A2%3A%22sc%22%3Bs%3A4%3A%22DESC%22%3Bs%3A5%3A%22start%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2210%22%3Bs%3A8%3A%22template%22%3Bs%3A267%3A%22%3Ctable%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20width%3D%5C%2250%5C%22%20rowspan%3D%5C%222%5C%22%3E%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20target%3D%5C%22_blank%5C%22%3E%3Cimg%20src%3D%5C%22%7Bphoto%7D%5C%22%20%2F%3E%3C%2Fa%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20%20target%3D%5C%22_blank%5C%22%20style%3D%5C%22text-decoration%3Anone%3B%5C%22%3E%7Busername%7D%3C%2Fa%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%3Ctd%3E%7Bupdatetime%7D%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%3C%2Ftable%3E%22%3B%7D&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'space.inc.php',
      'cachelife' => '0',
      'settings' =>
      array (
        'title' => '最新更新空间',
        'uid' => '',
        'startfriendnum' => '',
        'endfriendnum' => '',
        'startviewnum' => '',
        'endviewnum' => '',
        'startcredit' => '',
        'endcredit' => '',
        'avatar' => '-1',
        'namestatus' => '-1',
        'dateline' => '0',
        'updatetime' => '0',
        'order' => 'updatetime',
        'sc' => 'DESC',
        'start' => '0',
        'limit' => '10',
        'template' => '<table>
<tr>
<td width=\\"50\\" rowspan=\\"2\\"><a href=\\"{userlink}\\" target=\\"_blank\\"><img src=\\"{photo}\\" /></a></td>
<td><a href=\\"{userlink}\\"  target=\\"_blank\\" style=\\"text-decoration:none;\\">{username}</a></td>
</tr>
<tr><td>{updatetime}</td></tr>
</table>',
      ),
      'jscharset' => '0',
    ),
    'comment' => '获取UCHome最新更新会员空间',
    'type' => '5',
  ),
  'UCHome_最新记录' =>
  array (
    'url' => 'function=module&module=doing.inc.php&settings=a%3A6%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%D7%EE%D0%C2%BC%C7%C2%BC%22%3Bs%3A3%3A%22uid%22%3Bs%3A0%3A%22%22%3Bs%3A4%3A%22mood%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22start%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2210%22%3Bs%3A8%3A%22template%22%3Bs%3A360%3A%22%0D%0A%3Cdiv%20style%3D%5C%22padding%3A0%200%205px%200%3B%5C%22%3E%0D%0A%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20target%3D%5C%22_blank%5C%22%3E%3Cimg%20src%3D%5C%22%7Bphoto%7D%5C%22%20width%3D%5C%2218%5C%22%20height%3D%5C%2218%5C%22%20align%3D%5C%22absmiddle%5C%22%3E%3C%2Fa%3E%20%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20%20target%3D%5C%22_blank%5C%22%3E%7Busername%7D%3C%2Fa%3E%A3%BA%0D%0A%3C%2Fdiv%3E%0D%0A%3Cdiv%20style%3D%5C%22padding%3A0%200%205px%2020px%3B%5C%22%3E%0D%0A%3Ca%20href%3D%5C%22%7Blink%7D%5C%22%20style%3D%5C%22color%3A%23333%3Btext-decoration%3Anone%3B%5C%22%20target%3D%5C%22_blank%5C%22%3E%7Bmessage%7D%3C%2Fa%3E%0D%0A%3C%2Fdiv%3E%22%3B%7D&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'doing.inc.php',
      'cachelife' => '0',
      'settings' =>
      array (
        'title' => '最新记录',
        'uid' => '',
        'mood' => '0',
        'start' => '0',
        'limit' => '10',
        'template' => '
<div style=\\"padding:0 0 5px 0;\\">
<a href=\\"{userlink}\\" target=\\"_blank\\"><img src=\\"{photo}\\" width=\\"18\\" height=\\"18\\" align=\\"absmiddle\\"></a> <a href=\\"{userlink}\\"  target=\\"_blank\\">{username}</a>：
</div>
<div style=\\"padding:0 0 5px 20px;\\">
<a href=\\"{link}\\" style=\\"color:#333;text-decoration:none;\\" target=\\"_blank\\">{message}</a>
</div>',
      ),
      'jscharset' => '0',
    ),
    'comment' => '获取UCHome的最新记录',
    'type' => '5',
  ),
  'UCHome_竞价排名' =>
  array (
    'url' => 'function=module&module=html.inc.php&settings=a%3A3%3A%7Bs%3A4%3A%22type%22%3Bs%3A1%3A%220%22%3Bs%3A4%3A%22code%22%3Bs%3A27%3A%22%3Cdiv%20id%3D%5C%22sidefeed%5C%22%3E%3C%2Fdiv%3E%22%3Bs%3A4%3A%22side%22%3Bs%3A1%3A%220%22%3B%7D&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'html.inc.php',
      'cachelife' => '864000',
      'settings' =>
      array (
        'type' => '0',
        'code' => '<div id=\\"sidefeed\\"></div>',
        'side' => '0',
      ),
      'jscharset' => '0',
    ),
    'comment' => '获取UCHome的竞价排名信息',
    'type' => '5',
  ),
);

$tasktypes = array(
  'promotion' =>
  array (
    'name' => '论坛推广任务',
    'version' => '1.0',
  ),
  'gift' =>
  array (
    'name' => '红包类任务',
    'version' => '1.0',
  ),
  'avatar' =>
  array (
    'name' => '头像类任务',
    'version' => '1.0',
  )
);

$newbietask = array(
	1 => array(
		'name' => '回帖是一种美德',
		'task' => "1, 0, '回帖是一种美德', '学习回帖，看帖回帖是一种美德，BS看帖不回帖的', '', 0, 0, 0, 'all', 'newbie_post_reply', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '回复指定主题', '".addslashes('设置会员只有回复该主题才能完成任务，请填写主题的 tid(比如一个主题的地址是 http://localhost/viewthread.php?tid=8 那么该主题的 tid 就是 8)，留空为不限制')."', 'threadid', 'text', '0', ''",
			"'setting', '', '', 'entrance', 'text', 'viewthread', ''"
		)
	),
	2 => array(
		'name' => '我的第一次',
		'task' => "1, 0, '我的第一次', '学会发主题帖，成为社区的焦点', '', 0, 0, 0, 'all', 'newbie_post_newthread', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '在指定版块发表新主题', '".addslashes('设置会员必须在某个版块发表至少一篇新主题才能完成任务')."', 'forumid', 'text', '', ''",

			"'setting', '', '', 'entrance', 'text', 'forumdisplay', ''"
		)
	),
	3 => array(
		'name' => '与众不同',
		'task' => "1, 0, '与众不同', '修改个人资料，让你和别人与众不同', '', 0, 0, 0, 'all', 'newbie_modifyprofile', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '完善个人资料', '".addslashes('申请任务后只要把自己的个人资料填写完整即可完成任务')."', '', '', '', ''",
			"'setting', '', '', 'entrance', 'text', 'memcp', ''"
		)
	),
	4 => array(
		'name' => '我型我秀',
		'task' => "1, 0, '我型我秀', '上传头像，让大家认识一个全新的你', '', 0, 0, 0, 'all', 'newbie_uploadavatar', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '上传头像', '".addslashes('申请任务后只要成功上传头像即可完成任务')."', '', '', '', ''",
			"'setting', '', '', 'entrance', 'text', 'memcp', ''"
		)
	),
	5 => array(
		'name' => '联络感情',
		'task' => "1, 0, '联络感情', '给其他用户发个发短消息，大家联络一下感情', '', 0, 0, 0, 'all', 'newbie_sendpm', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '给指定会员发送短消息', '".addslashes('只有给该会员成功发送短消息才能完成任务，请填写该会员的用户名')."', 'authorid', 'text', '', ''",
			"'setting', '', '', 'entrance', 'text', 'space', ''"
		)
	),
	6 => array(
		'name' => '一个好汉三个帮',
		'task' => "1, 0, '一个好汉三个帮', '出来混的，没几个好友怎么行，加个好友吧', '', 0, 0, 0, 'all', 'newbie_addbuddy', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '将指定会员加为好友', '".addslashes('只有将该会员加为好友才能完成任务，请填写该会员的用户名')."', 'authorid', 'text', '', ''",
			"'setting', '', '', 'entrance', 'text', 'space', ''"
		)
	),
	7 => array(
		'name' => '信息时代',
		'task' => "1, 0, '信息时代', '信息时代最缺的什么？搜索', '', 0, 0, 0, 'all', 'newbie_search', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '学会搜索', '".addslashes('申请任务后只要成功使用论坛搜索功能即可完成任务')."', '', '', '', ''",
			"'setting', '', '', 'entrance', 'text', 'search', ''"
		)
	)
);


$testdatacontent = array();
$testdatacontent[0]['subject'] = '论坛运营秘籍 - Discuz! 7.2 新功能的妙用 ';
$testdatacontent[0]['message'] = <<<EOD

Discuz! 7.2 新推出的几个功能，都是围绕着提高论坛的互动性而设计的，好好利用这些新功能，对于提高论坛用户粘性，增强会员之间的互动性，大有脾益。下面我们来说说，如何根据论坛的实际情况，来合理的设置这些新功能。[p=30, 2, left]
[b][size=4]一、论坛动态和首页显示风格[/size][/b] [/p][p=30, 2, left]
[b]设计目标：[/b] [/p]
通过对论坛事件展示方式的优化，增强论坛信息的传递功能，提高论坛会员之间的沟通效率。[b]设置指导：[/b]
很多人喜欢 UCHome 中好友动态功能，Discuz! 将这一功能引入论坛系统，通过指定条件产生论坛动态消息，促进会员之间互动的产生。各项目的值应该根据当前论坛运营状况仔细斟酌而定。 例如：论坛日发帖量在100以上的，设置【主题回复数达到一定值发送动态】时可以如下设置 “10, 30, 80”  ，这样当主题被回复了10次，30次，80次的时候都在论坛动态页产生一个动态消息。日发帖量在1000以上的论坛，就可以设置“30，100，200”。总结起来论坛小，活跃用户少，日发帖量不大，那么应该将各项目的阈值调低，这样让论坛动态更容易产生。相反，论坛大，活跃用户多，日发帖量很大，那么应该将各项目的阈值调高，避免论坛动态泛滥，影响用户体验。


[img]http://faq.comsenz.com/attachments/2009/10/26_200910091741481w8rg.thumb.jpg[/img]

论坛首页支持两种显示风格了：一种是传统的论坛版块列表的形式，这种形式历史悠久，被广大用户所熟悉，版块就像一本书的目录，用户可以根据版块来快速的确定自己感兴趣的话题在什么地方；第二种论坛首页形式就是7.2新推出的论坛动态，在这种形式下，论坛内的各种事件动态信息都汇集到论坛动态列表中，比如某人发的主题回复数超过1000了，某某的帖子被版主评为精华了等等。这种以事件为核心，动态信息为表现的形式，可以大大加强论坛用户之间的互动性，信息流动起来了，互动性就更容易产生，更能突出一个真实“社区”的感觉。
在这里特别提醒一下，刚开始运营不久的论坛，往往内容不够充实，人气不旺，也就产生不了高质量的论坛动态信息，因此短期内不宜设置首页风格为：论坛实时动态。


[img]http://faq.comsenz.com/attachments/2009/10/26_200910091742581Wdb4.png[/img][p=30, 2, left]
[b][size=4]二、基于主题热度和评价的主题推荐方式[/size][/b] [/p][p=30, 2, left]
[b]设计目标：[/b] [/p]
以前版本中的版主推荐或者被广泛采用的首页四格插件等功能都是为了达到同一个目的：让论坛的各种“热闹”或者精华信息被更多的用户更加容易的看到，促使他们参与其中。 但以前的方式由于对论坛的帖子没有一个统一标准的评价系统，因此不管采用那种信息提取方式，都会不够精准。因此 Discuz! 引入了主题热度的概念，让论坛用户广泛的参与到论坛内容的评价中来。让论坛热闹和精华信息的提取和展现变得更加准确，更加方便。
[b]设置指导：[/b]
【[url=http://faq.comsenz.com/viewnews-851]主题热度[/url]】会影响主题在主题列表显示时标题后图标的显示(如图)，主题的热度根据回复数、评价值等参量根据一定算法计算得到。当热度值达到设定的显示级别如50，100，200 时，在主题列表中主题的标题后会显示对应级别的图标，来表示该主题的热门程度。站长应该根据站点当前运营情况来设定这些值，一般推荐的方案是保证主题列表中，热门主题和普通主题的比例在 1:7 左右。

[img]http://faq.comsenz.com/attachments/2009/10/26_200910091749011stPk.png[/img]

【[url=http://faq.comsenz.com/viewnews-851]主题评价[/url]】功能通过收集用户对主题的评价，来计算评价图标的显示级别，当达到设定的级别阈值时，在主题列表中显示主题标题后的对应级别的推荐图标。用户可以再后台设置主题评价的词语 例如加分操作和减分操作分别设置为“顶”“踩”或者“支持”“鄙视”等，发挥想象力，让用户更有兴趣参与到对主题的评价中来。

[img]http://faq.comsenz.com/attachments/2009/10/26_20091009174901250VL.png[/img]

【[url=http://faq.comsenz.com/viewnews-854]论坛热点[/url]】是根据主题热度来选取一部分热点主题展示在首页，由于选取的主题热度高，参与性强，加之显示在首页所以能好的促进论坛气氛的活跃。但是新站开启论坛热点的效果不会很好，因为新站主题少，人气少，提取出来的热点准确性就会大打折扣。等有一定人气基础，出来的热点才是真正的热点。一般推荐的方式是：左边放置图片展示，右边设置 10 至 14 个推荐主题。

[url=http://faq.comsenz.com/attachments/2009/10/26_200910091744121xhVg.png][img=644,186]http://faq.comsenz.com/attachments/2009/10/26_200910091744121xhVg.png[/img][/url]

【[url=http://faq.comsenz.com/viewnews-852]推荐主题[/url]】功能通过自动或手动方式从论坛数据中提取一些主题作为系统推荐的主题，这些主题一般为论坛里内容精彩、用户参与度高的话题。推荐主题的数量应设置合理，太多则让人眼花缭乱，太少则不美观。数据缓存时间也要设置得当，该值设置太大则数据长时间不更新，造成吸引力下降，设置太小频繁更新缓存又会增加服务器负担。根据设置推荐的主题可以显示在主题列表页，也可以显示在主题查看页（如图）。一般来讲和版块话题主旨符合程度高，帖子内容普适程度高的主题适合显示在主题列表页，帖子内容新颖，话题性强则更适合显示到主题查看页。

[img]http://faq.comsenz.com/attachments/2009/10/26_200910091759431vD2J.png[/img]
[url=http://faq.comsenz.com/attachments/2009/10/26_200910091759432UPgA.png][img=644,459]http://faq.comsenz.com/attachments/2009/10/26_200910091759432UPgA.png[/img][/url]
[p=30, 2, left]
[b][size=4]三、服务老用户不忘照顾新用户[/size][/b][/p]

[b]设计目标：[/b]
随着互联网的发展，论坛用户群体越来越广泛，很多人没有多少上网或电脑使用经验，他们成为论坛的用户后往往不知道自己能在论坛做些什么，通过新手任务功能，在向导的指引下，让这些用户很快的掌握论坛基本操作，不再对论坛感到陌生，尽快的参与到论坛的各种活动当中。
[b]设置指导：[/b]
建议站长在进行【[url=http://faq.comsenz.com/viewnews-853]新手任务[/url]】的设置时认真考虑任务奖励类型和具体的奖励量值。一般来讲，同时使用多种奖励形式(论坛已设定开启【道具】和【勋章】功能)更能激励新手们把所有新手任务做完。对积分的设置也要拉开层次，不要所有任务的奖励都奖励相同的积分量值。站长也可以修改任务描述，用更友好、更具吸引力的语言来描述任务，提高用户对完成任务的兴趣。下面是一些建议：

  任务一的任务名可以写“学习回帖” ，奖励10个金钱 。任务二的任务名写成“开始我的第一次”，奖励一种道具。 任务三的任务名写成“与众不同”，奖励一枚勋章。
   站长应该根据自己站点用户群特征来决定开启哪些新手任务项目，例如用户群主要为上网时间不长，对发帖回帖操作尚不熟悉的用户，那么就开启学习回帖，发表主题等比较初级的任务。如果用户群为已经有一定上网经验，对论坛常规的发帖回帖操作已经比较熟悉，那么就可以只开启修改个人资料，修改头像等比较高级的任务。
[color=#ff0000]备注： 文中的功能名以"【功能名称】" 形式标注 ，例如：【[/color][url=http://faq.comsenz.com/viewnews-853][color=#ff0000]新手任务[/color][/url][color=#ff0000]】 点击功能名称的链接，可以查看该功能的使用说明。[/color]
EOD;

$testdatacontent[1]['subject'] = 'Discuz! 7.2 新功能－－站长推荐 ';
$testdatacontent[1]['message'] = <<<EOD

Discuz! 7.2 新增站长推荐功能，管理员可以设置一部分帖子为“站长推荐”，被设置为“站长推荐”的这些帖子就会在帖子内容页面右下角以浮动窗口的形式展示给浏览者，如果有多个主题被设置为“站长推荐”则随机轮流显示。
站长推荐可以理解为一个全局主题推荐，管理员可以将一些版块重要信息，比如通知、公告等设置为站长推荐，以保证更多的用户可以浏览到，或者还可以在此加入广告帖进行赢利，一个功能多种用法，各位站长可以根据自身情况设置和使用。
“站长推荐”在后台的设置位置为：Discuz! 7.2 后台 => 广告 => 站长推荐
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722051W2zR.gif[/img][p=30, 2, left]一、设置站长推荐[/p]
可以在此设置站长推荐区域标题，默认为“站长推荐”，您可以设置为您希望的标题：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722052Ji2X.gif[/img][p=30, 2, left]二、添加站长推荐[/p]
添加热点话题有三种方式：手动添加、添加主题、自动添加。[p=30, 2, left]1、手动添加[/p]
上图界面中点击“添加”，在弹出的下拉框中我们点击“手动添加”：

[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722053xvtI.gif[/img]



输入“推荐链接地址”、“推荐标题”、“推荐内容”和“附加图片”，然后“提交”即可手动添加一条站长推荐。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722054Fae6.gif[/img]
上图界面中点击“提交”则该帖子成功被设置为“站长推荐”：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722055tNdh.gif[/img]
返回前台进入帖子内容页在右下角就可以看到我们刚才设置的该站长推荐：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722056CKUJ.gif[/img]
[b]2、添加主题[/b]
后台“站长推荐”点击“添加”，在弹出的下拉框中我们点击“添加主题”：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722057gPEE.gif[/img]
输入帖子地址后点击“获取帖子内容”则可以获取到该帖子的标题和帖子内容摘要：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722058BY2H.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722059Fwkt.gif[/img]
提交即可成功添加该主题为站长推荐信息。
[p=30, 2, left]3、自动添加[/p]
后台“站长推荐”点击“添加”，在弹出的下拉框中我们点击“自动添加”：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009092717220510PAXX.gif[/img]
系统将自动推荐 10 个主题作为站长推荐候选，自动推荐的原则的获取站点所有版主的推荐主题，如果版主推荐主题不足 10 个则有几个自动推荐几个。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909081525058gOVO.gif[/img]
管理员可以在此选择哪些推荐主题设置为站长推荐，选中推荐主题前面的多选框，“提交”即可。[p=30, 2, left]二、管理站长推荐[/p]
所有被设置为站长推荐和曾经设置为站长推荐的主题都会在此显示，管理员可以在此设置一些主题为站长推荐也可以取消其站长推荐的身份，还可以编辑这些主题，或者将这些主题删除出站长推荐。
[img]http://faq.comsenz.com/attachments/2009/09/9_2009092717220511ZOHp.gif[/img][p=30, 2, left]三、前台显示[/p]
我们来看看站长推荐在前台的显示效果，打开随便一篇帖子内容页，在右下角我们可以看到一个浮动窗口，这个就是站长推荐的显示界面：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009092717220512QfsZ.gif[/img]
在该浮动窗口中点击帖子标题、内容摘要，或者右下角的“查看”链接都可以进入该帖子内容页查看详情。
看到这里相信大家已经清楚了该功能的实际用途和使用方法，那么，赶快体验吧！
EOD;

$testdatacontent[2]['subject'] = '论坛热点：在第一眼就留住用户 ';
$testdatacontent[2]['message'] = <<<EOD

让社区论坛在第一眼就留住用户，需要及时的把热点事件传递给用户，在第一时间把最受会员欢迎的主题资源展示出来，才能够最大限度的提高论坛的互动性，增加社区的黏着度。
Discuz! 7.2新增的论坛热点功能，能够很好的满足主题聚焦的应用需求。该功能可以将社区中最抢眼的主题合显示到论坛首页的头部，方便用户快速在论坛中浏览热点信息。论坛热点的设置和 Discuz! 的其它功能一操作非常简单，只需要以管理员身份到后台简单开启即可。

我们截图来看一下开启后的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909110951061nyw4.gif[/img]
下面我们来说一下后台的开启方法：
进入 Discuz! 7.2 后台 => 界面 => 界面设置 => 首页设置：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271530271hxkL.gif[/img]
上图界面我们可以看到“论坛热点”开启选择，我们选择“是”来设置各项显示条件：
[img]http://faq.comsenz.com/attachments/2009/10/9_2009101616230316I1M.gif[/img]
论坛热点：是/否，设置是否显示全论坛的论坛热点主题。
论坛热点显示数量：设置论坛热点条目数，默认值 10 条。
论坛热点更新周期（秒）：设置论坛热点在多长时间更新一次，默认值 900 。
论坛热点图片大小：设置首页论坛热点图片的大小，默认值 100*70 。
论坛热点内容截取文字长度：设置论坛热点内容的文字长度，默认值 200 个字。
如此设置后的效果如图开篇第一个图片所示，需要注意的是，这里设置的“论坛热点显示数量”为 10 仅指右侧不包含图片的热点主题，不包含左侧的带图片主题。
论坛热点的显示结构为：
左侧一列调用带图片的主题热度最高一条主题及其图片缩略图、主题内容摘要及其发布时间和作者；
右侧调用主题热度最高的 10 条不带图片的主题，按照主题热度从高到低排序，前面 2 条显示主题标题、作者及其内容摘要，后面的 8 条之显示主题标题。
到此论坛热点的开启和效果展示为大家讲解完毕了，怎么样，这个功能是不是很吸引你，还等什么，赶快安装最新版 Discuz! 7.2 或者将您的论坛升级到 Discuz! 7.2 来体验吧！
EOD;

$testdatacontent[3]['subject'] = 'Discuz! 7.2新特性－－主题热度/评价';
$testdatacontent[3]['message'] = <<<EOD

Discuz!7.2 在对主题的操作上添加了新特性，即主题热度和主题评价。
主题热度，用户可以对主题进行回复、评价等操作，这些操作都会增加主题热度，当主题达到一定得热度时，会显示热度图标；
主题评价，用户可以对某主题评价，以表达自己的观点态度；当主题所得的评价指数达到后台设置的指数级别时，会显示评价图标；
这两项新特性都大大提高了用户浏览的效率，更是增加了热度高或评价高主题的浏览次数。
下面请看详细介绍：[p=30, 2, left][b]一、主题热度[/b][/p]
主题热度是 Discuz!7.2 新增的特性，站长可以在后台设置主题热度值及热度增加权重值。当某个主题达到站点设置的热度时，会在主题列表页标题右侧显示热度图标，大大提高热度主题的浏览次数。
1、后台设置
论坛后台 => 全局 => 论坛功能 => 主题热度，如下图：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400321aEXX.gif[/img]
回复增量权重：每次回复主题时，主题热度的增量，默认值为 5 。
评价增量权重：每次对主题进行评价操作时，主题热度的增量，默认为 3 。
热门主题显示级别：设置主题列表页主题热度的级别对应热度值。每个级别都有相应的热度图标，共有三个级别。级别热度值间用逗号分隔。留空为不显示热度图标。
设置完毕后，点击“提交”按钮完成设置。
设置完成后，到前台主题列表页刷新，达到热度值的主题前会显示主题热度图标：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081603201rueN.gif][img=644,171]http://faq.comsenz.com/attachments/2009/09/15_200909081603201rueN.gif[/img][/url]
2、根据主题热度来排序浏览
用户可以根据主题热度来对主题列表排序浏览，打开主题列表页：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081603202zliR.gif[/img][p=30, 2, left][b]二、主题评价[/b][/p]
主题评价是 Discuz!7.2 新增的特性，后台有是否开启该功能的开关，并且站长可以在后台设置评价图标显示级别。
1、后台设置
论坛后台 => 全局 => 论坛功能 => 主题评价，如下图：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400351aw5h.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400371JFAt.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400401hrE4.gif[/img]
启用主题评价：选择“是”，打开主题评价功能。
加分操作文字：设置评价加分项的表达文字，建议设置的简单明了，而且不宜过长；默认每评价一次加 1 个评价积分。
减分操作文字：设置评价减分项的表达文字，建议设置的简单明了，而且不宜过长；默认每评价一次减 1 个评价积分。
默认显示数值：设置在帖子内容页默认显示的评价结果数值，用户点击可切换。
每 24 小时评价主体次数：设置用户每 24 小时可以评价多少篇主题，0 或留空为不限制。
是否允许评价自己的帖子：设置是否允许评价自己的主题，评价自己的主题无积分奖励。
评价图标显示级别：设置主题列表页评价图标每一级别对应的评价指数。建议为 3 个级别，每个级别的评价指数请用逗号分隔。
设置好，点击“提交”完成设置。
2、前台评价主题
在前台浏览主题内容时，您会看到如下图：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081605032M3vn.gif[/img]
当主题的评价指数达到后台设置的指数级别时，在主题列表页将会显示对应级别的评价图标：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081605033D2LF.gif][img=644,201]http://faq.comsenz.com/attachments/2009/09/15_200909081605033D2LF.gif[/img][/url]
评价图标更直观地告诉该用户主题的评价，因此会大大增加评价高主题的浏览次数。
至此，主题热度和主题评价已经说明完毕，赶紧去体验下吧！
EOD;

$testdatacontent[4]['subject'] = 'Discuz! 7.2 新特性－－推荐主题';
$testdatacontent[4]['message'] = <<<EOD
D
Discuz!7.2 版本完善了推荐主题功能：推荐主题时可以修改主题标题、并有选择性地推荐主题中的图片等，用户体验有了很大的提高。
下面请看详细介绍：[p=30, 2, left][b]一、后台开启推荐主题的权限[/b][/p]
论坛后台 => 版块 => 版块管理 => 编辑，即可看到下图所示：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607261Sfhr.gif[/img]
选择推荐主题的方式及其他设置：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607391e0B1.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607392ZKwm.gif[/img]
设置好后，点击“提交”完成推荐主题的后台设置。[p=30, 2, left][b]二、前台推荐主题[/b][/p]
有推荐权限的用户在前台可以推荐某个主题，如图：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081607393hITH.gif][img=644,131]http://faq.comsenz.com/attachments/2009/09/15_200909081607393hITH.gif[/img][/url]
推荐主题设置：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607394uMLw.gif[/img]
被推荐的主题，可以在帖子列表页顶部看到：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607395MQ0W.gif[/img]
到此为止，推荐主题功能已经讲解完毕，赶紧去体验下吧！
EOD;

$testdatacontent[5]['subject'] = 'Discuz! 7.2 新特性－－新手任务';
$testdatacontent[5]['message'] = <<<EOD

Discuz!7.2 在论坛任务方面有所改进，系统有针对性地自带了 7 个新手任务，无需站长添加。新注册用户将自动申请该任务，此功能可用于防止恶意注册及恶意灌水，或引导新手快速熟悉论坛。
下面请看详细介绍：[p=30, 2, left][b]一、后台启用[/b][/p]
系统自带的 7 个新手任务，在后台都有开关，您可以启用或关闭任务。
论坛后台 => 扩展 => 论坛任务，如下图：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081610241JZg0.gif][img=644,436]http://faq.comsenz.com/attachments/2009/09/15_200909081610241JZg0.gif[/img][/url]
是否开启论坛任务：选择“是”开启论坛任务；如果选择“否”，那么下面的设置都是不起作用的。
可用：勾选表示该任务可用，用户注册后会自动申请该任务。如果不勾选，表示不可用，用户注册后，不会看到该任务。[p=30, 2, left][b]二、编辑新手任务[/b][/p]
您可以点击任务后的“编辑”来编辑该任务的一些信息，如图：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081610341n8AY.gif[/img]
编辑好点击“提交”完成编辑。[p=30, 2, left][b]三、新手前台执行任务[/b][/p]
用户注册后，登录前台，即可看到新手任务的提示，如图：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081610343KZDL.gif[/img]
新手每完成一个任务，就会得到相应的奖励。
至此，新手任务已经讲解完毕，赶紧去体验下吧！
EOD;

$testdatacontent[6]['subject'] = '主题关注：让论坛帖子动起来';
$testdatacontent[6]['message'] = <<<EOD

用户在社区论坛中的核心应用是有效信息的获取。当用户在“逛”论坛的时候，发现了一个很感兴趣的话题往往需要一定的时间成本。如果用户翻到一个帖子，主题内容和里面的回复都很有意思，这时候用户肯定还想即时了解到帖子的发展情况。有了“主题关注”功能，可以很方便的实现主题信息的互动，只需要用户把这个值得关注的主题标记为关注状态，其他会员回复该主题时，用户就可以收到一个交互性的通知，只需要鼠标轻轻一点，就会看到所关注的主题中有哪些“志同道合”者的回复了。让论坛帖子内容互动起来，是不是会有不一样感觉呢？
“主题关注”不仅是社区论坛功能细节上的实现，更是在尊重网络社区用户阅读习惯的基础之上的设计理念创新。用户盲无目的的去浏览帖子内容很容易形成阅读疲劳，“主题关注”可以轻松的把用户关心的主题信息主动的展示给用户，让用户的有效信息获取更加精准高效。
下面介绍一下会员如何使用主题关注功能：[p=30, 2, left][b]一、关注主题[/b][/p]
要将一个主题设为被关注状态有以下三种方法：
1、发布新主题时
在发表主题的时候，点击“发表话题”按钮右侧的“更多选项”，然后在“发帖选项”里选中“关注主题”的复选框
[img]http://faq.comsenz.com/attachments/2009/10/42_2009102816100010TeM.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281610002EHJ8.gif[/img]
2、看贴时
点击主题内容下方的 “收藏”图标，在弹出的窗口中点击“关注此主题的最新回复”
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281610003BVqH.gif[/img]
[p=30, 2, left][b]二、查看被关注的主题[/b][/p]
1、关注信息提示
当您所关注的主题有新的回复时，您将在页面顶部看到如下提示，您可以通过点击通知里的关注提示查看被关注主题的最新回复
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281613191ND3i.gif[/img]
2、在“个人中心”的“我的关注”中查看关注列表。
在关注列表中，您可以选择查看正在关注的“有新回复的主题”或者“全部主题”
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281615301xugz.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281618341SGvP.gif[/img][p=30, 2, left][b]三、取消关注主题[/b][/p]
1、在编辑帖子或回复帖子时，在高级模式下勾选“取消对此主题新回复的关注”复选框，这样此主题将不再处于被关注状态
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281629011crqU.gif[/img]
2、在二（2）的关注列表中选择需要取消关注的主题并点击“提交”按钮，如此操作将使得选中主题不再处于被关注状态
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281632171Yb4d.gif[/img]
此外，站点的管理员除了可以和普通会员一样使用主题关注功能外，还可以在系统设置中对会员的主题关注列表容量进行控制，具体操作如下：
系统设置 => 全局 => 用户权限 => 主题关注列表容量
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281635481Z6XD.gif[/img]
EOD;

$testdatacontent[7]['subject'] = 'Discuz! 7.2 新特性－－论坛动态';
$testdatacontent[7]['message'] = <<<EOD
Discuz! 7.2 增加了论坛动态实时浏览功能，用户除了浏览原来的版块列表界面外还可以切换到“论坛动态”里面查看论坛实时动态，此功能类似于 SNS 的动态查看功能，可以集中查看到所有好友的动态信息，而无需进入好友个人主页查看。
[img]http://faq.comsenz.com/attachments/2009/10/9_2009100915323019jA5.gif[/img]
站长可以在 Discuz! 7.2 后台设置论坛首页的默认显示风格，进入 Discuz! 7.2 系统设置 => 界面 => 界面设置 => 首页设置 => 首页显示风格：
[img]http://faq.comsenz.com/attachments/2009/10/9_200910091532302Z0N9.gif[/img]
经典版块列表：即论坛版块列表展示模式，也就是老版本的 Discuz! 的展示效果。
论坛实时动态：即 Discuz! 7.2 新增的动态实时查看功能，用户可以在此集中查看到所有好友的动态信息。
如果站长希望站点所有用户登录 Discuz! 后看到是其好友的动态信息，那么在这里就可以选择首页的默认显示风格为“论坛实时动态”，效果如下图所示：
[img]http://faq.comsenz.com/attachments/2009/10/9_200910091532303yDV1.gif[/img]
怎么样，是不是很方便？赶快安装全新的 Discuz! 7.2 或者升级您的论坛体验一下吧！
EOD;

$testdatacontent[8]['subject'] = 'Discuz! 7.2 新特性－－提醒系统';
$testdatacontent[8]['message'] = <<<EOD
Discuz! 7.2 新增了提醒系统，提醒内容包括“全部”、“系统信息”、“好友信息”、“帖子信息”。上述这些信息主要有新信息则就会在导航的“提醒”那里出现新信息提示，如下图所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118351ebXv.gif[/img]
鼠标放到“提醒”上就可以看到收到的信息内容。
点击“提醒”即可进入提醒系统界面：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118352Km5p.gif[/img]
提醒系统首页是全部信息展示，分类浏览可以点击其他的信息类别进行浏览。
系统信息：包括管理操作提醒、道具赠送提醒、任务提醒、积分提醒等。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118353g4uE.gif[/img]
好友信息：添加好友的提醒。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118354wCOX.gif[/img]
帖子信息：主题关注相关提醒。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118355XZp5.gif[/img]
Discuz! 7.2 提醒系统更加细化了各个操作带来的信息提醒，一目了然的分类，使用和浏览信息更加清晰明确。
EOD;

$testdatacontent[9]['subject'] = '帖子编辑器：轻轻松松发帖';
$testdatacontent[9]['message'] = <<<EOD
帖子主题的展示是社区论坛的核心功能。会员在发表或回复帖子时，用到的就多就是编辑器功能，很多站长苦恼于会员发帖时排版很乱而无法解决。一款专业编辑器不仅需发有人性化的界面，更需要能够帮助用户更好的对帖子内容进行编辑，让社区论坛主题的排版更加专业和多样化。
分析会员的使用习惯，Discuz! 7.2 的编辑器有了很大的改进，界面更友好，突出显示常用操作图标，并且新增了很多功能。
新增删除线和分割线标签，让您的帖子格式更加丰富多彩；插入图片可以设置宽高；音乐播放支持 mp3 wma ra rm ram midwav 等多种格式；视频播放支持 wmv rm rmvb flv swf avi asf mpg mpeg mov等多种格式；视频可以自动分析优酷、土豆、ku6三大主流视频网站的视频网址；附件上传、修改、删除等操作整合到编辑器中；附件上传机制改进，同时上传多个附件时如果有上传失败的，不影响已经成功上传的。
Discuz! 7.2 前台 => 发帖，即可进入全新的 Discuz! 7.2 编辑器：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271441261E3fW.gif[/img]
从上图界面可以看出，Discuz! 7.2 的编辑器有了很大的改观，突出显示目前社区比较常用的表情、图片、音乐、视频、Flash、代码、引用，界面更加友好。
下面介绍几个新增功能：[p=30, 2, left][b]1、新增删除线和分割线标签[/b][/p]
新增删除线和分割线标签，让您的帖子格式更加丰富多彩。
如下图所示我们为“节省天光”几个字添加“删除线”：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909071737197EwOi.gif[/img]
设置后的效果如下图所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909071737198xEI5.gif[/img]
同理添加分割线：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909071737199TrYW.gif[/img]
添加后的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371910v6WE.gif[/img][p=30, 2, left][b]2、插入图片可以设置宽高[/b][/p]
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371911dvfs.gif[/img][p=30, 2, left][b]3、音乐播放支持 mp3 wma ra rm ram mid wav 等多种格式[/b][/p]
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371912wMUt.gif[/img]
插入的音乐代码类似：
[audio]http://vfile.home.news.cn/music/public/vd06/200908/18/50/MUfs06200908181354375150fd99.mp3[/audio]
播放效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371913aJ2z.gif[/img][p=30, 2, left][b]4、视频功能更强大[/b][/p]
视频播放支持 wmv rm rmvb flv swf avi asf mpg mpeg mov 等多种格式
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371914Ad5B.gif[/img]
插入的视频代码类似：
[media=wmv,400,300]http://w4180.s11.mydiscuz.com/Alizee_lais la bonita.wmv[/media]
发布后的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371915G371.gif[/img]
视频还可以自动分析优酷、土豆、ku6 三大主流视频网站的视频网址：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371916vS5U.gif[/img]
插入的视频代码类似：
[media=swf,400,300]http://player.youku.com/player.php/sid/XMTA3OTE4NjIw/v.swf[/media]
发布后的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_20090907173719177BxG.gif[/img][p=30, 2, left][b]5、编辑器里上传附件[/b][/p]
附件上传、修改、删除等操作整合到编辑器中；附件上传机制改进，同时上传多个附件时如果有上传失败的，不影响已经成功上传的。
批量上传：
[img]http://faq.comsenz.com/attachments/2009/09/9_20090907173719182BAP.gif[/img]
普通上传：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371919zovp.gif[/img]
附件列表：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371920TWNz.gif[/img]
到此 Discuz! 7.2 最新编辑器介绍完了，怎么样？是不是超酷炫！而且使用起来更加得心应手，那么还等什么，赶快体验吧！

论坛运营秘籍 - Discuz!7.2 新功能的妙用：[url=http://faq.comsenz.com/viewnews-869]http://faq.comsenz.com/viewnews-869[/url]
[p=30, 2, left][img]http://faq.comsenz.com/attachments/2009/09/9_200909071737196ENcW.gif[/img][/p]
EOD;

$testdatacontent[10]['subject'] = '转发视频：更易更强大';
$testdatacontent[10]['message'] = <<<EOD
Discuz! 7.2 在视频播放方面有了很大改进，不但支持播放 wmv rm rmvb flv swf avi asf mpgmpeg mov 等多种格式，还可以自动分析优酷、土豆、ku6三大主流视频网站的视频网址，而不需要再去找专门的转发引用地址，使得转发视频变得更容易更强大，下面为大家举例演示这三大主流视频网站的视频转发功能。
Discuz! 7.2 前台 => 发帖，即可进入全新 Discuz! 7.2 编辑器：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271441261E3fW.gif[/img]
下面我们从优酷、土豆、ku6 三大主流视频网站分别找一个视频地址：
优酷：[url=http://v.youku.com/v_show/id_XOTMwODQ2NjQ=.html]http://v.youku.com/v_show/id_XOTMwODQ2NjQ=.html[/url]
土豆：[url=http://www.tudou.com/programs/view/4NgBn7J39bg/]http://www.tudou.com/programs/view/4NgBn7J39bg/[/url]
ku6 ：[url=http://v.ku6.com/show/VrLuttrXQb1CIbkC.html]http://v.ku6.com/show/VrLuttrXQb1CIbkC.html[/url]
将上面三个地址分别插入视频，如图所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909111355583f0Ft.gif[/img]
插入后的代码如下图所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909111355584BDQP.gif[/img]
提交发布后的效果如下图所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909111355585XszF.gif[/img]
从上面的演示可以看出来，Discuz! 7.2 发布优酷、土豆、ku6 三大主流视频网站的视频变得非常容易，无需再费力找论坛引用地址，直接输入视频的网址系统就会自动解析获取最终的播放地址，还等什么，快快来亲身体验一把吧！
EOD;

$testdatacontent[11]['subject'] = 'Discuz!7.2 新特性－－Manyou应用的开启';
$testdatacontent[11]['message'] = <<<EOD

Discuz!7.2 较之前的版本，在后台添加了 Manyou 应用的开关。做为插件的形式，站长可以在后台开启或关闭该功能。开启该功能后，会员在论坛也可以看到 Manyou 应用的动态信息及大家都在玩什么应用游戏，同时还可以参与进来。
下面请看详细介绍：
[b]一、安装 Manyou 插件并开启[/b]

论坛后台 => 插件 => 论坛插件，如图：

[url=http://faq.comsenz.com/attachments/2009/09/15_200909271430221otXN.gif][img=644,233]http://faq.comsenz.com/attachments/2009/09/15_200909271430221otXN.gif[/img][/url]
安装后，请启用该插件，如图：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271432211ofuE.gif[/img][p=30, 2, left][b]二、开启 Manyou 应用[/b][/p]
论坛后台 => 插件 => Manyou：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753151btyX.gif][img=644,440]http://faq.comsenz.com/attachments/2009/09/15_200909101753151btyX.gif[/img][/url]
点击“设置”：
[url=http://faq.comsenz.com/attachments/2009/09/15_2009091017533510KUl.gif][img]http://faq.comsenz.com/attachments/2009/09/15_2009091017533510KUl.gif[/img][/url]
点击“MYOP 应用管理”：
[url=http://faq.comsenz.com/attachments/2009/09/15_20090910175335228pj.gif][img=644,228]http://faq.comsenz.com/attachments/2009/09/15_20090910175335228pj.gif[/img][/url]
点击“启用服务”：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909101753353h7yn.gif[/img]
为站点开启具体的应用或游戏：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753354uW1y.gif][img=644,474]http://faq.comsenz.com/attachments/2009/09/15_200909101753354uW1y.gif[/img][/url]
设为默认应用：无论用户是否添加此应用，默认应用都会显示在所有用户的开始菜单里面。
关闭应用：用户不能添加处于关闭状态的应用，应用目录中也不会显示处于关闭状态的应用。
设为推荐应用：被设置为推荐的应用将显示在您网站应用目录的推荐栏目下。
为使大家能在论坛首页看到推荐的应用并方便地参与进来，请设置首页应用推荐条目数：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753355rwqi.gif][img]http://faq.comsenz.com/attachments/2009/09/15_200909101753355rwqi.gif[/img][/url][p=30, 2, left][b]三、前台查看[/b][/p]
1、前台查看 Manyou 动态
打开论坛首页，可以看到下图所示：
[url=http://faq.comsenz.com/attachments/2009/09/15_2009091017533561U7q.gif][img=644,244]http://faq.comsenz.com/attachments/2009/09/15_2009091017533561U7q.gif[/img][/url]
点击“应用动态”，即可查看 Manyou 应用的相关动态：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753357KO05.gif][img]http://faq.comsenz.com/attachments/2009/09/15_200909101753357KO05.gif[/img][/url]
点击“论坛版块”，可以在论坛首页下方看到推荐的 Manyou 应用：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753358q9hK.gif][img=644,317]http://faq.comsenz.com/attachments/2009/09/15_200909101753358q9hK.gif[/img][/url]
到此，Manyou 应用功能已经讲解完毕，赶紧去体验一下吧！
EOD;

$testdatacontent[12]['subject'] = '7.2新增功能及功能强化';
$testdatacontent[12]['message'] = <<<EOD
[p=30, 2, left][b]功能新增：[/b][/p]
[p=16, 0, left]=================================================================[/p]
[p=16, 0, left]活动导出[/p]
[p=16, 0, left]增加附件的动态链接(attach://aid.ext)，便于各方面引用[/p]
[p=16, 0, left]主题鉴定[/p]
[p=16, 0, left]抢楼贴[/p]
[p=16, 0, left]不受审核限制的 IP 列表[/p]
[p=16, 0, left]版块名称颜色[/p]
[p=16, 0, left]倒序帖--倒序显示回复[/p]
[p=16, 0, left]把主题在任意版块中置顶[/p]

[p=30, 2, left][b]增强优化:[/b][/p]
[p=16, 0, left]=================================================================[/p]
[p=16, 0, left]管理员不受任何搜索限制[/p]
[p=16, 0, left]权限表达式增强，增加注册 IP、注册时间、用户定制栏目的公式项目，可自定义权限表达式提示文字，增加可访问用户列表[/p]
[p=16, 0, left]数据调用增加主题评价的排序[/p]
[p=16, 0, left]管理中心用户管理增加马甲查找功能[/p]
[p=16, 0, left]回收站增加主题列表功能[/p]
[p=16, 0, left]买卖主题增加日志记录查看[/p]
[p=16, 0, left]个人资料页可自由查看他人的帖子[/p]
[p=16, 0, left]评分记录显示方式改进[/p]
[p=16, 0, left]主题列表分割带[/p]
[p=16, 0, left]分类信息加强[/p]
[p=16, 0, left]前台权限细化[/p]
[p=16, 0, left]搜索页高级搜索显示调整[/p]
[p=16, 0, left]添加新用户组时深度继承所选参照组权限[/p]
[p=16, 0, left]版主可以管理特殊用户组的用户[/p]
EOD;
?>