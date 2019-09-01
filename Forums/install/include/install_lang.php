<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 32641 2013-02-27 08:39:58Z monkey $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', 'English ver.');
$lang = array(
	'SC_GBK' => 'Simplified Chinese',
	'TC_BIG5' => 'Traditional Chinese',
	'SC_UTF8' => 'English UTF8 version by small six website',
	'TC_UTF8' => 'Traditional Chinese UTF8 version',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => SOFT_NAME.' Setup Wizard',
	'agreement_yes' => 'I agree',
	'agreement_no' => 'I do not agree',
	'notset' => 'Not limit',

	'message_title' => 'Prompt message',
	'error_message' => 'Error message',
	'message_return' => 'Return',
	'return' => 'Return',
	'install_wizard' => 'Setup Wizard',
	'config_nonexistence' => 'Config file does not exist',
	'nodir' => 'Directory does not exist',
	'redirect' => 'The browser will automatically jump page, Without human intervention.<br>Unless your browser does not support frames, Click here',
	'auto_redirect' => 'The browser will automatically jump page, Without human intervention',
	'database_errno_2003' => 'Can not connect to the database, check the database whether to start, the database server address is correct ',
	'database_errno_1044' => 'Can not create a new database, check the name of the database fill in correctly',
	'database_errno_1045' => 'Can not connect to the database, check the database user name or password is correct',
	'database_errno_1064' => 'SQL Syntax error',

	'dbpriv_createtable' => 'Not CREATE TABLE permission, Installation can not continue',
	'dbpriv_insert' => 'Not INSERT permission，Installation can not continue',
	'dbpriv_select' => 'Not SELECT permission，Installation can not continue',
	'dbpriv_update' => 'Not UPDATE permission，Installation can not continue',
	'dbpriv_delete' => 'Not DELETE permission，Installation can not continue',
	'dbpriv_droptable' => 'Not DROP TABLE permission，Can not be installed',

	'db_not_null' => 'Database already installed UCenter to continue the installation will clear the original data.',
	'db_drop_table_confirm' => 'Continue the installation will clear all the original data, you sure you want to continue?',

	'writeable' => 'Can write',
	'unwriteable' => 'Can not write',
	'old_step' => 'Previous',
	'new_step' => 'Next',

	'database_errno_2003' => 'Can not connect to the database, check the database whether to start, the database server address is correct ',
	'database_errno_1044' => 'Can not create a new database, check the name of the database fill in correctly',
	'database_errno_1045' => 'Can not connect to the database, check the database user name or password is correct',
	'database_connect_error' => 'Database connection error',

	'step_title_1' => 'Check install environment',
	'step_title_2' => 'Setting environment',
	'step_title_3' => 'Create a database',
	'step_title_4' => 'Install',
	'step_env_check_title' => 'Start install',
	'step_env_check_desc' => 'Environment and the file directory permissions check',
	'step_db_init_title' => 'Install the database',
	'step_db_init_desc' => 'Is running the database installation',

	'step1_file' => 'Directory file',
	'step1_need_status' => 'Required state',
	'step1_status' => 'Current status of the',
	'not_continue' => 'Please red cross partial amendments and try again',

	'tips_dbinfo' => 'Fill in the database info',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'Fill in the Administrator Info',
	'step_ext_info_title' => 'Installation was successful.',
	'step_ext_info_comment' => 'Click to enter login',

	'ext_info_succ' => 'Installation was successful.',
	'install_submit' => 'Submit',
	'install_locked' => 'Install the lock has been installed, if you sure you want to reinstall, please go to delete the server<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'You must solve the above problem, the installation can continue',

	'step_app_reg_title' => 'Setting environment',
	'step_app_reg_desc' => 'The detection server environment and set UCenter',
	'tips_ucenter' => 'Please fill UCenter',
	'tips_ucenter_comment' => 'UCenter is Comsenz Core services program of the company\'s products, Discuz! Board The installation and operation rely on this program. If you have already installed UCenter, Please fill in the following information. Otherwise, go to <a href="http://www.discuz.com/" target="blank">Comsenz Products</a> Download and install, Before continuing.',

	'advice_mysql_connect' => 'Please check the mysql module is loaded correctly',
	'advice_gethostbyname' => 'Whether PHP configuration gethostbyname function is disabled. Please contact your hosting provider to determine open this',
	'advice_file_get_contents' => 'This function requires the php.ini allow_url_fopen option is turned on. Please contact your hosting provider to determine open this',
	'advice_xml_parser_create' => 'This function requires PHP support XML. Please contact your hosting provider to determine open this',
	'advice_fsockopen' => 'This function requires the php.ini allow_url_fopen option is turned on. Please contact your hosting provider to determine open this',
	'advice_pfsockopen' => 'This function requires the php.ini allow_url_fopen option is turned on. Please contact your hosting provider to determine open this',
	'advice_stream_socket_client' => 'Whether PHP configuration banned the stream_socket_client function',
	'advice_curl_init' => 'Whether PHP configuration banned curl_init function',

	'ucurl' => 'UCenter URL',
	'ucpw' => 'UCenter Founder password',
	'ucip' => 'UCenter IP addresses',
	'ucenter_ucip_invalid' => 'Format error, please fill out the correct IP address',
	'ucip_comment' => 'You can not fill the vast majority of cases',

	'tips_siteinfo' => 'Please fill in the site information',
	'sitename' => 'Site Name',
	'siteurl' => 'Site URL',

	'forceinstall' => 'Mandatory install',
	'dbinfo_forceinstall_invalid' => 'Current database which already contains the same the table prefix data sheet, you can modify the table name prefix to avoid deleting the old data, or select the mandatory installation. Force the installation will delete the old data, and can not be restored',

	'click_to_back' => 'Click to return to the previous step',
	'adminemail' => 'System Email',
	'adminemail_comment' => 'Used to send error reports',
	'dbhost_comment' => 'A database server address, for ships localhost',
	'tablepre_comment' => 'The same database running multiple forums, please change the prefix',
	'forceinstall_check_label' => 'I want to delete the data, mandatory install !!!',

	'uc_url_empty' => 'You have not filled UCenter URL, Please return to fill',
	'uc_url_invalid' => 'URL Format error',
	'uc_url_unreachable' => 'UCenter URL The address may fill in error, please check',
	'uc_ip_invalid' => 'Unable to resolve the domain name, Please fill in the site IP',
	'uc_admin_invalid' => 'UCenter founder password error please re-fill',
	'uc_data_invalid' => 'Communication fails check the URL address is correct UCenter ',
	'uc_dbcharset_incorrect' => 'UCenter Database character set character set consistent with the current app',
	'uc_api_add_app_error' => 'Add to UCenter app error',
	'uc_dns_error' => 'UCenter DNS Parse error please return to fill out the IP address UCenter',

	'ucenter_ucurl_invalid' => 'UCenter the URL is empty or wrong format, please check',
	'ucenter_ucpw_invalid' => 'UCenter founder of the password is blank or formatting errors, please check',
	'siteinfo_siteurl_invalid' => 'Site URL is empty or format error, please check',
	'siteinfo_sitename_invalid' => 'Site name is blank or format error, please check',
	'dbinfo_dbhost_invalid' => 'Database server is empty or format error, please check',
	'dbinfo_dbname_invalid' => 'Database name is empty or format error, please check',
	'dbinfo_dbuser_invalid' => 'Database user name is blank or format error, please check',
	'dbinfo_dbpw_invalid' => 'Database password is blank or format error, please check',
	'dbinfo_adminemail_invalid' => 'System, the mailbox is empty or format error, please check',
	'dbinfo_tablepre_invalid' => 'Table prefix is empty or format error, please check',
	'admininfo_username_invalid' => 'Administrator user name is blank or format error, please check',
	'admininfo_email_invalid' => 'Administrator Email blank or format error, please check',
	'admininfo_password_invalid' => 'Administrator password is blank, please fill out the',
	'admininfo_password2_invalid' => 'The two passwords do not match, please check',

	'install_dzfull' => '<br><label><input type="radio"'.(getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /> A new installation Discuz! X (Contain UCenter Server)</label>',
	'install_dzonly' => '<br><label><input type="radio"'.(getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /> Install only Discuz! X (Has been installed manually specify UCenter Server)</label>',

	'username' => 'Admin account',
	'email' => 'Admin Email',
	'password' => 'Admin PW',
	'password_comment' => 'The administrator PW can not be empty',
	'password2' => 'Repeat PW',

	'admininfo_invalid' => 'Admini information is not complete, please check administrator account & password & email',
	'dbname_invalid' => 'Database name is empty, please fill out the database name',
	'tablepre_invalid' => 'Table prefix is empty or format error, please check',
	'admin_username_invalid' => 'Data illegal user name user name length should not exceed 15 letters long and can not contain special characters, usually Chinese, letters or numbers',
	'admin_password_invalid' => 'Password and the above inconsistency please re-enter',
	'admin_email_invalid' => 'Email Wrong address the e-mail address is being used or the format is invalid please replace the other address',
	'admin_invalid' => 'Your information manager information is not completed please carefully fill out each item',
	'admin_exist_password_error' => 'The user already exists if you want to set this user forum administrator the user’s password is entered correctly or replace the board admin\'s name',

	'tagtemplates_subject' => 'Title',
	'tagtemplates_uid' => 'User ID',
	'tagtemplates_username' => 'Poster',
	'tagtemplates_dateline' => 'Date',
	'tagtemplates_url' => 'Thread URL',

	'uc_version_incorrect' => 'Your UCenter server version is too low please upgrade UCenter service ended to the latest version and upgrade, download address: http://www.comsenz.com/.',
	'config_unwriteable' => 'Install can not write to the config file, set the config.inc.php is writable state program properties(777)',

	'install_in_processed' => 'Being installed...',
	'install_succeed' => 'Install was successful, click to enter',
	'install_cloud' => 'Installation successful, welcome to the opening Discuz! The cloud platform <br> Discuz! The cloud platform committed to helping owners to increase website traffic, and enhance the ability of website operators to increase website revenue. <br> Discuz! cloud platform is provided free of charge QQ Internet, Tencent aspect search, roaming applications, the SOSO expression services. Discuz! Cloud platform will continue to provide more quality services to the project. <br> opened Discuz! platform, make sure that your website (Discuz!, UCHome, or SupeSite) has been upgraded to Discuz! X3.',
	'to_install_cloud' => 'Opened to the background',
	'to_index' => 'Temporarily not opened',

	'init_credits_karma' => 'Prestige',
	'init_credits_money' => 'Money',

	'init_postno0' => 'Landlord',
	'init_postno1' => 'Sofa',
	'init_postno2' => 'Bench',
	'init_postno3' => 'Floor',

	'init_support' => 'Support',
	'init_opposition' => 'Opposition',

	'init_group_0' => 'Member',
	'init_group_1' => 'Administrator',
	'init_group_2' => 'Super Moderator',
	'init_group_3' => 'Moderator',
	'init_group_4' => 'Ban Post',
	'init_group_5' => 'Ban Visit',
	'init_group_6' => 'Ban IP',
	'init_group_7' => 'Tourist',
	'init_group_8' => 'Awaiting verification',
	'init_group_9' => 'Beggar',
	'init_group_10' => 'Newbie',
	'init_group_11' => 'Registered Member',
	'init_group_12' => 'Intermediate Member',
	'init_group_13' => 'Senior Member',
	'init_group_14' => 'Gold Member',
	'init_group_15' => 'Forum veteran',

	'init_rank_1' => '新生入学',
	'init_rank_2' => '小试牛刀',
	'init_rank_3' => '实习记者',
	'init_rank_4' => '自由撰稿人',
	'init_rank_5' => '特聘作家',

	'init_cron_1' => 'Empty Today\'s Posts',
	'init_cron_2' => 'Empty month Online',
	'init_cron_3' => 'daily data cleansing',
	'init_cron_4' => 'birthday Statistics and mail blessing',
	'init_cron_5' => 'Topic Reply Notification',
	'init_cron_6' => 'publish daily clean-up',
	'init_cron_7' => 'limited operation clean-up',
	'init_cron_8' => 'Forum to promote the clean-up',
	'init_cron_9' => 'Topic of the month clean-up',
	'init_cron_10' => 'daily X-Space update user',
	'init_cron_11' => 'Update weekly theme',

	'init_bbcode_1' => 'The contents of the horizontal scroll， this effect is similar to HTML marquee tag Note: This effect is only valid under the Internet Explorer browser。',
	'init_bbcode_2' => 'Embedded Flash animation',
	'init_bbcode_3' => 'QQ online status click this icon and his （her） chat',
	'init_bbcode_4' => 'Superscript',
	'init_bbcode_5' => 'Subscript',
	'init_bbcode_6' => 'Embedded Windows media audio',
	'init_bbcode_7' => 'Embedded Windows media audio or video',

	'init_qihoo_searchboxtxt' =>'Enter keywords, Quick Search this Forum',
	'init_threadsticky' =>'Sticky Top, Top category, edition Top',

	'init_default_style' => 'Default style',
	'init_default_forum' => 'Default Forum',
	'init_default_template' => 'Department of the default template',
	'init_default_template_copyright' => 'Beijing Sing-ups Technology Co. Ltd.',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => 'Ad/SPAM\r\nMalicious irrigation\r\nCONTENT\r\nIrrelevant\r\nDuplicate post\r\n\r\nI agree\r\nFine article\r\nOriginal content',
	'init_userreasons' => 'Is to force!\r\nHorses are clouds of God\r\nLike this one!\r\nCottage\r\nCalm',
	'init_link' => 'Discuz! Official forum',
	'init_link_note' => 'Provide the latest Discuz! Product news， software downloads and technical exchanges',

	'init_promotion_task' => 'Web site promotion tasks',
	'init_gift_task' => 'Red envelope type of task',
	'init_avatar_task' => 'Picture type of task',

	'license' => '<div class="license"><h1>English version of the license agreement for English users</h1>

<p>All rights reserved (c) 2001-2013, Beijing comsenz-ups Technology Co. Ltd. All rights reserved.</p>

<p>Thank you for choosing Comsenz. I hope our efforts can provide you with a fast and efficient, powerful site solutions and strong community forum solution. The Comsenz URL for http://www.comsenz.com，Official forum site at http://www.discuz.net。</p>

<p>Notice to users: This Agreement is a legal agreement between you and the Comsenz Sing company provides a variety of software products and services you use. Whether you are an individual or organization, profit or not, use (including for the purpose of study and research), are required to carefully read this Agreement, including the exclusion or restriction of Comsenz responsibility Disclaimer and limit your rights. Please review and accept or do not accept the terms of service. If you do not agree to the terms of service and / or Comsenz it at any time to modify, you should not use or take the initiative to cancel the Comsenz Sing products. Otherwise, any of your related services in Comsenz registration, login, download, view and use behavior will be deemed fully accept all of the Terms of Service, including the acceptance of any modifications the Comsenz the Terms of Service at any time made .
<p>The terms of service in the event of a change, Sing will be published on the website modifications. Once the revised Terms of Service on stage after the website management announced that an effective substitute for the original terms of service. You can always visit the Kang Shengguan party Forum to see the latest version of the Terms of Service. If you choose to accept the Terms, you are agreeing to be bound by the agreement to the conditions. If you do not agree to the Terms of Service, you can not get the right to use the Service. Or if you are in violation of the provisions of, the Comsenz Company reserves the right to suspend or terminate your eligibility to use the Comsenz and retain the right to pursue legal responsibility.</p>
<p>Understand, agree to and comply with all the terms of this Agreement prior to the commencement Comsenz. You may also signed another written agreement directly with the Comsenz to supplement or replace the whole or any part of this Agreement.</p></p>

<p>Comsenz with all intellectual property rights in the software. The software for the license agreement, not sold. Comsenz only allows you to comply with the provisions of this Agreement, copy, download, install, use or otherwise benefit from the functionality of the software or intellectual property rights.</p>

<h3>I. The right to License Agreement</h3>
<ol>
   <li>On the basis of full compliance with this License Agreement, the software used in non-commercial use, without having to pay a software copyright license fees.</li>
   <li>You can modify the constraints and limits stipulated in the agreement the Comsenz source code (if provided) or interface style to suit your site requirements.</li>
   <li>You use this software to build websites in which all members of the ownership of information, articles and related information, and independently undertake the audit of the site\'s content and use this software to build a duty of care to ensure that it does not infringe the legitimate rights and interests of any person, independently take responsibility for thefull responsibility for the the Comsenz software and services brought caused the Comsenz or loss of customers, you should be full compensation for.</li>
   <li>If you need the Comsenz software or service user commercial use must be obtained separately written permission of Comsenz, you get a commercial license, you can be the software used for commercial purposes, is determined based on the type of license purchased technologyperiod of support, technical support methods and technical support content, from the moment of purchase, within a period of technical support is owned by the manner specified within the specified range of technical support services. Commercial users the power to reflect and comment on relevant comments will be a primary consideration, but not necessarily be adopted by the promise or guarantee.</li>
   <li>Download for your website from Comsenz Application Center application, but should the application developer / owner to pay the appropriate fees.</li>
</ol>

<h3>II. Restrictions and limitations stipulated in the agreement</h3>
<ol>
   <li>Comsenz without written before the commercial license, the Software may not be used for commercial purposes (including, but not limited to, corporate websites, business websites, for commercial purpose or profit website). Buy commercial license, please visit http://www.discuz.com refer to the instructions, you can also call 8610-51282255 for more information.</li>
   <li>May not rent, sell, mortgage or sublicense the Software or associated with the commercial license.</li>
   <li>In any case, regardless of the purpose, whether after modify or landscaping, changes to what extent, as long as the use of the whole or any part of the Comsenz, without the written permission of the page footer at the Comsenz name and Comsenz affiliated website (http://www.comsenz.com, or http://www.discuz.net) the link must be retained, but can not erase or modify.</li>
   <li>Comsenz the whole or any part of the basis for the development of any derivative version, modified versions or third-party version is used to redistribute is prohibited.</li>
   <li>You download an application from the Application Center, without the written permission of application developers / owners, not to reverse-engineer, reverse assemble, reverse compile, are not allowed to copy, modify, links, reproduced, assembly, publish, publishing, development relating to derivative products, works.</li>
   <li>If you fail to comply with the terms of this Agreement, your license will be terminated, the license rights will be recovered, and you should bear the corresponding legal responsibility.</li>
</ol>

<h3>III. Limited Warranty and Disclaimer</h3>
<ol>
   <li>The software and the documentation that came with as does not provide any explicit or implied, in the form of compensation or guarantees.</li>
   <li>User voluntarily use the software, you must understand the risk of using the software, not buy, we do not promise to provide any form of technical support, guarantee and is not responsible for any use of this software problemsresponsibility.</li>
   <li>Comsenz does not use this software to build websites or forum articles or liable for the information, the full responsibility borne by you.</li>
   <li>The Comsenz can not be fully uploaded to the application-centric applications monitored by a third party, there is no guarantee the legality of the application, security, integrity, authenticity or quality; when you download an application from the Application Center, agreed to make their own judgmentand bear all risks without relying on Comsenz. But in any case, Comsenz shall have the right to stop the application center services and take appropriate action, including but not limited to uninstall related applications, suspension of all or part of the service, keep the relevant records, to the relevant authorities report. Whereby you and a third party may result in the loss of Comsenz is not liable for any direct, indirect or consequential responsibility.</li>
   <li>Hong Shing Comsenz software and services in a timely manner, security, accuracy is not guaranteed, due to force majeure, Comsenz factors beyond its control (including hacker attacks, stopping power, etc.) caused by software use and servicesuspension or termination, your losses, you agree to the waiver of all rights Sing corporate responsibility. 6. Comsenz drew particular attention to, the Comsenz companies in order to protect the company\'s business development and adjustment autonomy Sing The company has at any time with or without prior notice to modify the service, suspend or terminate some or all of the software and services the right to modify will be announced on the the Comsenz company website page, including without limitation this notice. The Hong Shing exercise to modify or discontinue, terminate the rights of some or all of the software and services of losses caused to the Comsenz do not need to be responsible to you or any third party.</li>
</ol>

<p> For the the Comsenz end-user license agreement, the details of the commercial license and technical services, provided exclusively by the Comsenz. The Sing The company has the right to modify the license agreement and lists of services, the new authorized user of the date of entry into force of revised agreement or a price list from the change without prior notice.</p>

<p>Once you start the installation Comsenz, shall be deemed to fully understand and accept this agreement to the terms of, and in the enjoyment of the rights conferred by these provisions, subject to the restrictions and limitations. Agreement beyond the permitted behavior, will be in direct violation of the licensing agreement and an infringement, we have the right to terminate the license at any time, be ordered to stop the damage, and reserves the power to be held responsible.</p>

<p>Interpretation of the terms of the license agreement, effectiveness and dispute resolution, applies to the laws of the mainland of the People\'s Republic of China.</p>

<p>If any dispute or controversy between you and Comsenz, first of all should be resolved through friendly consultations, the negotiation fails, you hereby fully agree with the dispute or submit the dispute to the jurisdiction of the Comsenz located in Haidian District People\'s Court. The Sing The company has the explanation and the right to modify the content of the above provisions.</p>

<p>（After the body）</p>

<p align="right">Comsenz</p>

</div>',

	'uc_installed' => 'You have installed UCenter, if you need to reinstall, delete data/install.lock file',
	'i_agree' => 'I have read and agree to the terms of all content',
	'supportted' => 'supportted',
	'unsupportted' => 'Does not support',
	'max_size' => 'Support/maximum size',
	'project' => 'Project',
	'ucenter_required' => 'Discuz! Desired configuration',
	'ucenter_best' => 'Discuz! Optimal',
	'curr_server' => 'Current server',
	'env_check' => 'milieu Check',
	'os' => 'Operating system',
	'php' => 'PHP Version',
	'attachmentupload' => 'Attach upload',
	'unlimit' => 'Unlimited',
	'version' => 'Version',
	'gdversion' => 'GD Library',
	'allow' => 'Allow ',
	'unix' => 'Unix',
	'diskspace' => 'Disk Space',
	'priv_check' => 'Directories， check file permissions',
	'func_depend' => 'Dependency checking function',
	'func_name' => 'Function name',
	'check_result' => 'Test results',
	'suggestion' => 'Proposal',
	'advice_mysql' => 'Please check the mysql module is loaded correctly',
	'advice_fopen' => 'This function requires the php.ini allow_url_fopen option is turned on. Please contact your hosting provider to determine open this',
	'advice_file_get_contents' => 'This function requires the php.ini allow_url_fopen option is turned on. Please contact your hosting provider to determine open this',
	'advice_xml' => 'This function requires PHP support XML. Please contact your hosting provider to determine open this',
	'none' => 'None',

	'dbhost' => 'Database server',
	'dbuser' => 'Database user name',
	'dbpw' => 'Database Pw',
	'dbname' => 'Database name',
	'tablepre' => 'Database Prefix',

	'ucfounderpw' => 'Founder password',
	'ucfounderpw2' => 'Repeat the founder password',

	'init_log' => 'Initialization record',
	'clear_dir' => 'Empty catalog',
	'select_db' => 'Select the database',
	'create_table' => 'Establish a data table',
	'succeed' => 'Success ',

	'install_data' => 'Data is being installed',
	'install_test_data' => 'Additional data are being installed',

	'method_undefined' => 'Undefined method',
	'database_nonexistence' => 'Database operations object does not exist',
	'skip_current' => 'Skip this step',
	'topic' => 'Topics',

);

$msglang = array(
	'config_nonexistence' => 'Your config.inc.php does not exist can not continue installation use FTP upload the file and try again.',
);

?>