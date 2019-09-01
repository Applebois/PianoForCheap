<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('post');
0
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_editor_extra.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_editor_body.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_editor_attribute.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/seccheck.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/editor_menu.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/editor_menu_forum.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/upload.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/common/editor.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
|| checktplrefresh('./template/default/forum/post.htm', './template/default/forum/post_attachlimit.htm', 1511324593, '1', './data/template/1_1_forum_post.tpl.php', './template/default', 'forum/post')
;?><?php include template('common/header'); ?><script type="text/javascript">
var allowpostattach = parseInt('<?php echo $_G['group']['allowpostattach'];?>');
var allowpostimg = parseInt('<?php echo $allowpostimg;?>');
var pid = parseInt('<?php echo $pid;?>');
var tid = parseInt('<?php echo $_G['tid'];?>');
var extensions = '<?php echo $_G['group']['attachextensions'];?>';
var imgexts = '<?php echo $imgexts;?>';
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
var seccodecheck = parseInt('<?php if(checkperm('seccode') && $seccodecheck) { ?>1<?php } else { ?>0<?php } ?>');
var secqaacheck = parseInt('<?php if(checkperm('seccode') && $secqaacheck) { ?>1<?php } else { ?>0<?php } ?>');
var typerequired = parseInt('<?php echo $_G['forum']['threadtypes']['required'];?>');
var sortrequired = parseInt('<?php echo $_G['forum']['threadsorts']['required'];?>');
var special = parseInt('<?php echo $special;?>');
var isfirstpost = <?php if($isfirstpost) { ?>1<?php } else { ?>0<?php } ?>;
var allowposttrade = parseInt('<?php echo $_G['group']['allowposttrade'];?>');
var allowpostreward = parseInt('<?php echo $_G['group']['allowpostreward'];?>');
var allowpostactivity = parseInt('<?php echo $_G['group']['allowpostactivity'];?>');
var sortid = parseInt('<?php echo $sortid;?>');
var special = parseInt('<?php echo $special;?>');
var fid = <?php echo $_G['fid'];?>;
var postaction = '<?php echo $_GET['action'];?>';
var ispicstyleforum = <?php if($_G['forum']['picstyle']) { ?>1<?php } else { ?>0<?php } ?>;
</script>

<?php if($_GET['action'] == 'edit') { $editor[value] = $postinfo[message];?><?php } else { $editor[value] = $message;?><?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_post.js?<?php echo VERHASH;?>" type="text/javascript"></script>

<?php if($isfirstpost && $sortid) { ?>
<script type="text/javascript">
var forum_optionlist = <?php if($forum_optionlist) { ?>'<?php echo $forum_optionlist;?>'<?php } else { ?>''<?php } ?>;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>threadsort.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?><?php
$actiontitle = <<<EOF


EOF;
 if($_GET['action'] == 'newthread') { if($special == 0) { 
$actiontitle .= <<<EOF
Post a Topic

EOF;
 } elseif($special == 1) { 
$actiontitle .= <<<EOF
Create polls

EOF;
 } elseif($special == 2) { 
$actiontitle .= <<<EOF
Selling goods

EOF;
 } elseif($special == 3) { 
$actiontitle .= <<<EOF
Post Reward

EOF;
 } elseif($special == 4) { 
$actiontitle .= <<<EOF
Create activities

EOF;
 } elseif($special == 5) { 
$actiontitle .= <<<EOF
Create debate

EOF;
 } elseif($specialextra) { 
$actiontitle .= <<<EOF
{$_G['setting']['threadplugins'][$specialextra]['name']}

EOF;
 } } elseif($_GET['action'] == 'reply' && !empty($_GET['addtrade'])) { 
$actiontitle .= <<<EOF

Add goods

EOF;
 } elseif($_GET['action'] == 'reply') { 
$actiontitle .= <<<EOF

Participation / Reply Topic

EOF;
 } elseif($_GET['action'] == 'edit') { if($special == 2) { 
$actiontitle .= <<<EOF
Edit goods
EOF;
 } else { 
$actiontitle .= <<<EOF
Edit Post
EOF;
 } } 
$actiontitle .= <<<EOF


EOF;
?><?php
$icon = <<<EOF


EOF;
 if($special == 1) { 
$icon .= <<<EOF
poll

EOF;
 } elseif($special == 2) { 
$icon .= <<<EOF
trade

EOF;
 } elseif($special == 3) { 
$icon .= <<<EOF
reward

EOF;
 } elseif($special == 4) { 
$icon .= <<<EOF
activity

EOF;
 } elseif($special == 5) { 
$icon .= <<<EOF
debate

EOF;
 } elseif($isfirstpost && $sortid) { 
$icon .= <<<EOF
sort

EOF;
 } 
$icon .= <<<EOF


EOF;
?>

<?php if($_GET['action'] != 'newthread') { $subjectcut = cutstr($thread[subject], 30);?><?php } ?><?php
$actionsubject = <<<EOF


EOF;
 if($_GET['action'] == 'reply') { 
$actionsubject .= <<<EOF

<em>&rsaquo;</em><a href="forum.php?mod=viewthread&amp;tid={$thread['tid']}">{$subjectcut}</a>

EOF;
 } elseif($_GET['action'] == 'edit') { 
$actionsubject .= <<<EOF

<em>&rsaquo;</em><a href="forum.php?mod=redirect&amp;goto=findpost&amp;ptid={$thread['tid']}&amp;pid={$pid}">{$subjectcut}</a>

EOF;
 } 
$actionsubject .= <<<EOF


EOF;
?>

<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="Home"><?php echo $_G['setting']['bbname'];?></a> <?php echo $navigation;?><?php echo $actionsubject;?> <em>&rsaquo;</em> <?php echo $actiontitle;?></div>
</div><?php $adveditor = $isfirstpost && $special || $special == 2 && ($_GET['action'] == 'newthread' || $_GET['action'] == 'reply' && !empty($_GET['addtrade']) || $_GET['action'] == 'edit' && $thread['special'] == 2);?><?php $advmore = !$showthreadsorts && !$special || $_GET['action'] == 'reply' && empty($_GET['addtrade']) || $_GET['action'] == 'edit' && !$isfirstpost && ($thread['special'] == 2 && !$special || $thread['special'] != 2);?><form method="post" autocomplete="off" id="postform"
<?php if($_GET['action'] == 'newthread') { ?>action="forum.php?mod=post&amp;action=<?php if($special != 2) { ?>newthread<?php } else { ?>newtrade<?php } ?>&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;topicsubmit=yes"
<?php } elseif($_GET['action'] == 'reply') { ?>action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $extra;?>&amp;replysubmit=yes"
<?php } elseif($_GET['action'] == 'edit') { ?>action="forum.php?mod=post&amp;action=edit&amp;extra=<?php echo $extra;?>&amp;editsubmit=yes" <?php echo $enctype;?>
<?php } ?>
onsubmit="return validate(this)">
<div id="ct" class="ct2_a ct2_a_r wp cl">
<input type="hidden" name="formhash" id="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="posttime" id="posttime" value="<?php echo TIMESTAMP;?>" />
<?php if($_GET['action'] == 'edit') { ?>
<input type="hidden" name="delattachop" id="delattachop" value="0" />
<?php } if(!empty($_GET['modthreadkey'])) { ?><input type="hidden" name="modthreadkey" id="modthreadkey" value="<?php echo $_GET['modthreadkey'];?>" /><?php } ?>
<input type="hidden" name="wysiwyg" id="<?php echo $editorid;?>_mode" value="<?php echo $editormode;?>" />
<?php if($_GET['action'] == 'reply') { ?>
<input type="hidden" name="noticeauthor" value="<?php echo $noticeauthor;?>" />
<input type="hidden" name="noticetrimstr" value="<?php echo $noticetrimstr;?>" />
<input type="hidden" name="noticeauthormsg" value="<?php echo $noticeauthormsg;?>" />
<?php if($reppid) { ?>
<input type="hidden" name="reppid" value="<?php echo $reppid;?>" />
<?php } if($_GET['reppost']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_GET['reppost'];?>" />
<?php } elseif($_GET['repquote']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_GET['repquote'];?>" />
<?php } } if($_GET['action'] == 'edit') { ?>
<input type="hidden" name="fid" id="fid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="tid" value="<?php echo $_G['tid'];?>" />
<input type="hidden" name="pid" value="<?php echo $pid;?>" />
<input type="hidden" name="page" value="<?php echo $_GET['page'];?>" />
<?php } if($special) { ?>
<input type="hidden" name="special" value="<?php echo $special;?>" />
<?php } if($specialextra) { ?>
<input type="hidden" name="specialextra" value="<?php echo $specialextra;?>" />
<?php } ?>
<div class="bm bw0 cl"<?php if(!$showthreadsorts && !$adveditor) { ?> id="editorbox"<?php } ?>>
<?php if($_GET['action'] == 'newthread') { ?>
<ul class="tb cl mbw">
<?php if($savecount) { ?>
<li class="y"><a id="draftlist" href="javascript:;" class="xi2" onmouseover="showMenu({'ctrlid':'draftlist','ctrlclass':'a','duration':2,'pos':'34'})">Drafts box(<strong><?php echo $savecount;?></strong>)</a></li>
<?php } if(!$_G['forum']['threadsorts']['required'] && !$_G['forum']['allowspecialonly']) { ?><li<?php echo $postspecialcheck['0'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread')">Post a Topic</a></li><?php } if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $tsortid => $name) { ?><li<?php if($sortid == $tsortid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&sortid=<?php echo $tsortid;?>')"><?php echo strip_tags($name);; ?></a></li>
<?php } if($_G['group']['allowpostpoll']) { ?><li<?php echo $postspecialcheck['1'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=1')">Create polls</a></li><?php } if($_G['group']['allowpostreward']) { ?><li<?php echo $postspecialcheck['3'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=3')">Post Reward</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li<?php echo $postspecialcheck['5'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=5')">Create debate</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li<?php echo $postspecialcheck['4'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=4')">Create activities</a></li><?php } if($_G['group']['allowposttrade']) { ?><li<?php echo $postspecialcheck['2'];?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&special=2')">Selling goods</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li<?php if($specialextra==$tpid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=newthread&specialextra=<?php echo $tpid;?>')"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>

<div id="draftlist_menu" style="display:none">
<ul class="xl xl1">
<?php if($savethreads) { if(is_array($savethreads)) foreach($savethreads as $savethread) { ?><li>
<label>[<a href="javascript:;" title="Quote" onclick="insertsave(<?php echo $savethread['pid'];?>)">Quote</a>]</label>
<a href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $savethread['fid'];?>&amp;tid=<?php echo $savethread['tid'];?>&amp;pid=<?php echo $savethread['pid'];?>" class="xi2" target="_blank"><?php echo $savethread['subject'];?></a>
<span class="xg1"><?php echo $savethread['dateline'];?></span>
</li>
<?php } } if($savethreadothers) { if(is_array($savethreadothers)) foreach($savethreadothers as $savethread) { ?><li>
<label>[<a href="javascript:;" title="Quote" onclick="insertsave(<?php echo $savethread['pid'];?>)">Quote</a>]</label>
<a href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $savethread['fid'];?>&amp;tid=<?php echo $savethread['tid'];?>&amp;pid=<?php echo $savethread['pid'];?>" class="xi2" target="_blank"><?php echo $savethread['subject'];?></a>
<span class="xg1"><?php echo $savethread['dateline'];?></span>
</li>
<?php } } ?>
<li class="xi2"><a href="forum.php?mod=guide&amp;view=my&amp;type=thread&amp;filter=save&amp;fid=0" target="_blank">View all drafts</a></li>
</ul>
</div>

<?php } elseif($_GET['action'] == 'edit' && $isfirstpost && !$thread['sortid']) { ?>
<ul class="tb cl mbw">
<li<?php if(!$sortid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=edit&tid=<?php echo $_G['tid'];?>&pid=<?php echo $pid;?>')"><?php echo $actiontitle;?></a></li>
<?php if($_GET['action'] == 'edit' && $isfirstpost && !$thread['sortid']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $tsortid => $name) { ?><li<?php if($sortid == $tsortid) { ?> class="a"<?php } ?>><a href="javascript:;" onclick="switchpost('forum.php?mod=post&action=edit&tid=<?php echo $_G['tid'];?>&pid=<?php echo $pid;?>&sortid=<?php echo $tsortid;?>')"><?php echo strip_tags($name);; ?></a></li>
<?php } } ?>
</ul>
<?php } ?>

<div id="postbox">
<?php if($_GET['action'] == 'newthread' && $_G['setting']['sitemessage']['newthread'] || $_GET['action'] == 'reply' && $_G['setting']['sitemessage']['reply']) { ?>
<span id="custominfo" class="y cur1<?php if($_GET['action'] != 'reply') { ?> mtn<?php } ?>">&nbsp;<img src="<?php echo IMGDIR;?>/info_small.gif" alt="Faq" /></span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_top'])) echo $_G['setting']['pluginhooks']['post_top'];?><div class="pbt cl">
<?php if($sortid) { ?>
<input type="hidden" name="sortid" value="<?php echo $sortid;?>" />
<?php } if($isfirstpost && !empty($_G['forum']['threadtypes']['types'])) { ?>
<div class="ftid">
<?php if($_G['forum']['ismoderator'] || empty($_G['forum']['threadtypes']['moderators'][$thread['typeid']])) { ?>
<select name="typeid" id="typeid" width="80">
<option value="0">Select a topic type</option><?php if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $typeid => $name) { if(empty($_G['forum']['threadtypes']['moderators'][$typeid]) || $_G['forum']['ismoderator']) { ?>
<option value="<?php echo $typeid;?>"<?php if($thread['typeid'] == $typeid || $_GET['typeid'] == $typeid) { ?> selected="selected"<?php } ?>><?php echo strip_tags($name);; ?></option>
<?php } } ?>
</select>
<?php } else { ?>
[<?php echo strip_tags($_G['forum']['threadtypes']['types'][$thread['typeid']]);; ?>]
<?php } ?>
</div>
<?php } ?>
<div class="z">
<?php if($_GET['action'] == 'reply' && !empty($_GET['addtrade']) || $_GET['action'] == 'edit' && $thread['special'] == 2 && !$postinfo['first']) { ?>
<input name="subject" type="hidden" value="" />
<?php } else { if($_GET['action'] != 'reply') { ?>
<span><input type="text" name="subject" id="subject" class="px" value="<?php echo $postinfo['subject'];?>" <?php if($_GET['action'] == 'newthread') { ?>onblur="if($('tags')){relatekw('-1','-1'<?php if($_G['group']['allowposttag']) { ?>,function(){extraCheck(4)}<?php } ?>);doane();}"<?php } ?> onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em" tabindex="1" /></span>
<?php } else { ?>
<span id="subjecthide" class="z">RE: <?php echo $thread['subject'];?> [<a href="javascript:;" onclick="display('subjecthide');display('subjectbox');$('subject').value='RE: <?php echo dhtmlspecialchars(str_replace('\'', '\\\'', $thread['subject'])); ?>';display('subjectchk');strLenCalc($('subject'), 'checklen', 80);return false;">Modify</a>]</span>
<span id="subjectbox" style="display:none"><input type="text" name="subject" id="subject" class="px" value="" onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em" /></span>
<?php } ?>			
<span id="subjectchk"<?php if($_GET['action'] == 'reply') { ?> style="display:none"<?php } ?>>You can also enter  <strong id="checklen">80</strong>  Characters</span>
<script type="text/javascript">strLenCalc($('subject'), 'checklen', 80)</script>
<?php } if($_GET['action'] == 'newthread' && $modnewthreads) { ?> <span class="xg1 xw0">(Required audit)</span><?php } if($_GET['action'] == 'reply' && $modnewreplies) { ?> <span class="xg1 xw0">(Required audit)</span><?php } if($_GET['action'] == 'edit' && $isfirstpost && $thread['displayorder'] == -4) { ?> <span class="xg1 xw0">(Draft)</span><?php } ?>
</div>
</div>
<?php if(!$isfirstpost && $thread['special'] == 5 && empty($firststand) && $_GET['action'] != 'edit') { ?>
<div class="pbt cl">
<div class="ftid">
<select name="stand" id="stand">
<option value="">Choice Theory</option>
<option value="0">Neutral</option>
<option value="1"<?php if($stand == 1) { ?> selected="selected"<?php } ?>>Square</option>
<option value="2"<?php if($stand == 2) { ?> selected="selected"<?php } ?>>Anti-party</option>
</select>
</div>
</div>
<?php } ?>

<div id="attachnotice_attach" class="tbms mbm xl" style="display:none">
You have <span id="unusednum_attach"></span> Unused attachments &nbsp; <a href="javascript:;" class="xi2" onclick="attachoption('attach', 2);" />View</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('attach', 1)">Use</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('attach', 0)">Del</a>
<div id="unusedlist_attach" style="display:none"></div>
</div>
<div id="attachnotice_img" class="tbms mbm xl" style="display:none">
You have <span id="unusednum_img"></span> Of unused image &nbsp; <a href="javascript:;" class="xi2" onclick="attachoption('img', 2);" />View</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('img', 1)">Use</a><span class="pipe">|</span><a href="javascript:;" class="xi2" onclick="attachoption('img', 0)">Del</a>
<div id="unusedlist_img" style="display:none"></div>
</div>

<?php if($showthreadsorts) { ?>
<div class="exfm cl"><?php include template('forum/post_sortoption'); ?></div>
<?php } elseif($adveditor) { if($special == 1) { include template('forum/post_poll'); } elseif($special == 2 && ($_GET['action'] != 'edit' || ($_GET['action'] == 'edit' && ($thread['authorid'] == $_G['uid'] && $_G['group']['allowposttrade'] || $_G['group']['allowedittrade'])))) { ?><p class="xg1">Add product information to complete this post to continue to add more than one Goods</p><?php include template('forum/post_trade'); } elseif($special == 3) { include template('forum/post_reward'); } elseif($special == 4) { include template('forum/post_activity'); } elseif($special == 5) { include template('forum/post_debate'); } elseif($specialextra) { ?><div class="specialpost s_clear"><?php echo $threadplughtml;?></div>
<?php } } if($_GET['action'] == 'reply' && $quotemessage) { ?>
<div class="pbt cl"><?php echo $quotemessage;?></div>
<?php } ?><div id="<?php echo $editorid;?>_body_loading"><img src="<?php echo IMGDIR;?>/loading.gif" width="16" height="16" class="vm" /> Please wait...</div>
<div class="edt" id="<?php echo $editorid;?>_body" style="display: none">
<div id="<?php echo $editorid;?>_controls" class="bar">
<div class="y">
<div class="b2r nbl nbr" id="<?php echo $editorid;?>_adv_5">
<p>
<a id="<?php echo $editorid;?>_undo" title="Revocation">Undo</a>
</p>
<p>
<a id="<?php echo $editorid;?>_redo" title="Redo">Redo</a>
</p>
</div>
<div class="z">
<span class="mbn"><a id="<?php echo $editorid;?>_fullswitcher"></a><a id="<?php echo $editorid;?>_simple"></a></span>
<label id="<?php echo $editorid;?>_switcher" class="bar_swch ptn"><input id="<?php echo $editorid;?>_switchercheck" type="checkbox" class="pc" name="checkbox" value="0" <?php if(!$editor['editormode']) { ?>checked="checked"<?php } ?> onclick="switchEditor(this.checked?0:1)" />Plain text</label>
</div>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_right'])) { ?>
<div class="y"><?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_right'])) echo $_G['setting']['pluginhooks']['post_editorctrl_right'];?></div>
<?php } ?>
<div id="<?php echo $editorid;?>_button" class="btn cl">
<div class="b2r nbr nbl" id="<?php echo $editorid;?>_adv_s2">
<a id="<?php echo $editorid;?>_fontname" class="dp" title="Text name" menupos="43!"><span id="<?php echo $editorid;?>_font">Typeface</span></a>
<a id="<?php echo $editorid;?>_fontsize" class="dp" title="Text size" menupos="43!" menuwidth="25"><span id="<?php echo $editorid;?>_size">Size</span></a>
<span id="<?php echo $editorid;?>_adv_1">
<a id="<?php echo $editorid;?>_inserthorizontalrule" title="Separator">Hr</a>
<br />
</span>
<a id="<?php echo $editorid;?>_bold" title="Text bold">B</a>
<a id="<?php echo $editorid;?>_italic" title="Italic">I</a>
<a id="<?php echo $editorid;?>_underline" title="Underlined">U</a>
<a id="<?php echo $editorid;?>_forecolor" title="Set the text color">Color</a>
<a id="<?php echo $editorid;?>_backcolor" title="Set the text background color">BgColor</a>
<a id="<?php echo $editorid;?>_url" title="Add link">Url</a>
<span id="<?php echo $editorid;?>_adv_8">
<a id="<?php echo $editorid;?>_unlink" title="Remove link">Unlink</a>
</span>
</div>
<div class="b2r nbl" id="<?php echo $editorid;?>_adv_2">
<p id="<?php echo $editorid;?>_adv_3">
<a id="<?php echo $editorid;?>_tbl" title="Add table">Table</a>
</p>
<p>
<a id="<?php echo $editorid;?>_removeformat" title="Clear text format">Removeformat</a>
</p>
</div>
<div class="b2r">
<p>
<a id="<?php echo $editorid;?>_autotypeset" title="Auto typesetting">Autotypeset</a>
<a id="<?php echo $editorid;?>_justifyleft" title="Left">Left</a>
<a id="<?php echo $editorid;?>_justifycenter" title="Center">Center</a>
<a id="<?php echo $editorid;?>_justifyright" title="Right">Right</a>
</p>
<p id="<?php echo $editorid;?>_adv_4">
<a id="<?php echo $editorid;?>_floatleft" title="Left float">FloatLeft</a>
<a id="<?php echo $editorid;?>_floatright" title="Right float">FloatRight</a>
<a id="<?php echo $editorid;?>_insertorderedlist" title="A sorted list">Orderedlist</a>
<a id="<?php echo $editorid;?>_insertunorderedlist" title="Unordered list">Unorderedlist</a>
</p>
</div>
<div class="b1r" id="<?php echo $editorid;?>_adv_s1">
<a id="<?php echo $editorid;?>_sml" title="Add an emoticon">Emoticon</a>
<div id="<?php echo $editorid;?>_imagen" style="display:none">!</div>
<a id="<?php echo $editorid;?>_image" title="Add a picture" menupos="00" menuwidth="600">Picture</a>
<?php if($_G['group']['allowpostattach']) { ?>
<div id="<?php echo $editorid;?>_attachn" style="display:none">!</div>
<a id="<?php echo $editorid;?>_attach" title="Add Attachment" menupos="00" menuwidth="600">Attach</a>
<?php } if($_G['forum']['allowmediacode'] && $_G['group']['allowmediacode']) { ?>
<a id="<?php echo $editorid;?>_aud" title="Add music">Music</a>
<a id="<?php echo $editorid;?>_vid" title="Add a video">video</a>
<a id="<?php echo $editorid;?>_fls" title="Adding Flash">Flash</a>
<?php } if(($_GET['action'] == 'newthread' || $_GET['action'] == 'reply' || $_GET['action'] == 'edit') && $_G['group']['allowat']) { ?>
<a id="<?php echo $editorid;?>_at" title="@Friends and concern" menupos="43" menuwidth="600">@Friend</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_left'])) echo $_G['setting']['pluginhooks']['post_editorctrl_left'];?>
</div>
<div class="b2r esb" id="<?php echo $editorid;?>_adv_s3">
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_top'])) echo $_G['setting']['pluginhooks']['post_editorctrl_top'];?>
<a id="<?php echo $editorid;?>_quote" title="Add a quote text">Quote</a>
<a id="<?php echo $editorid;?>_code" title="Add code text">Code</a>
<?php if($isfirstpost) { ?>
<a id="<?php echo $editorid;?>_free" adv="1" title="Add free info">Free</a>
<?php if($_G['group']['allowhidecode']) { ?><a id="<?php echo $editorid;?>_hide" adv="1" title="Add hidden content">Hide</a><?php } } ?>
<a id="<?php echo $editorid;?>_pasteword" adv="1" title="Paste content from Word">Word Paste</a>
<?php if($_G['group']['allowdownremoteimg']) { if(!($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle']))) { } ?><a id="<?php echo $editorid;?>_downremoteimg" adv="1" title="Download remote images">Download Image</a><?php } if($isfirstpost) { ?>
<a id="<?php echo $editorid;?>_page" adv="1" title="Pagination">Page</a>
<a id="<?php echo $editorid;?>_index" adv="1" title="Directory">Index</a>
<?php } if($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])) { ?>
<a id="a_magic_doodle" adv="1" href="home.php?mod=magic&amp;mid=doodle&amp;showid=comment_doodle&amp;target=<?php echo $editorid;?>_textarea&amp;from=forumeditor" class="cst" onclick="showWindow(this.id, this.href, 'get', 0)"><img src="<?php echo STATICURL;?>image/magic/doodle.small.gif" alt="doodle" title="<?php echo $_G['setting']['magics']['doodle'];?>" style="margin-top:2px" /></a>
<?php } ?>
<a id="<?php echo $editorid;?>_password" adv="1" title="Posts password">Password</a>
<a id="<?php echo $editorid;?>_postbg" adv="1" title="Posts background">Background</a>
<?php if($_G['group']['allowbegincode'] && $isfirstpost) { ?>
<a id="<?php echo $editorid;?>_beginning" adv="1" title="Add the starting animation" menupos="43" menuwidth="600">Animation</a>
<?php } if(is_array($_G['cache']['bbcodes_display'][$_G['groupid']])) foreach($_G['cache']['bbcodes_display'][$_G['groupid']] as $tag => $bbcode) { ?><a id="<?php echo $editorid;?>_cst<?php echo $bbcode['params'];?>_<?php echo $tag;?>" class="cst" title="<?php echo $bbcode['explanation'];?>"><img src="<?php echo STATICURL;?>image/common/<?php echo $bbcode['icon'];?>" title="<?php echo $bbcode['explanation'];?>" alt="<?php echo $tag;?>" /></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_editorctrl_bottom'])) echo $_G['setting']['pluginhooks']['post_editorctrl_bottom'];?>
</div>
</div>
</div>

<div id="rstnotice" class="ntc_l bbs" style="display:none">
<a href="javascript:;" title="Clear content" class="d y" onclick="userdataoption(0)">close</a>You have the last uncommitted successful data <a class="xi2" href="javascript:;" onclick="userdataoption(1)"><strong>Data recovery</strong></a>
</div>

<div class="area">
<textarea name="<?php echo $editor['textarea'];?>" id="<?php echo $editorid;?>_textarea" class="pt" rows="15" tabindex="2"><?php echo $editor['value'];?></textarea>
</div><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_editor.css?<?php echo VERHASH;?>" />
<script src="<?php echo $_G['setting']['jspath'];?>editor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>bbcode.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="data/cache/common_postimg.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var editorid = '<?php echo $editorid;?>';
var textobj = $(editorid + '_textarea');
var wysiwyg = (BROWSER.ie || BROWSER.firefox || (BROWSER.opera >= 9)) && parseInt('<?php echo $editor['editormode'];?>') == 1 ? 1 : 0;
var allowswitcheditor = parseInt('<?php echo $editor['allowswitcheditor'];?>');
var allowhtml = parseInt('<?php echo $editor['allowhtml'];?>');
var allowsmilies = parseInt('<?php echo $editor['allowsmilies'];?>');
var allowbbcode = parseInt('<?php echo $editor['allowbbcode'];?>');
var allowimgcode = parseInt('<?php echo $editor['allowimgcode'];?>');
var simplodemode = parseInt('<?php if($editor['simplemode'] > 0) { ?>1<?php } else { ?>0<?php } ?>');
var fontoptions = new Array("Arial", "New Arial", "Blackbody", "Microsoft elegant black", "Arial", "Verdana", "Mingliu", "Helvetica", "Trebuchet MS", "Tahoma", "Impact", "Times New Roman", "FangSong,FangSong_GB2312", "Block type upon,Block type upon_GB2312");
var smcols = <?php echo $_G['setting']['smcols'];?>;
var custombbcodes = new Array();
<?php if($_G['cache']['bbcodes_display'][$_G['groupid']]) { if(is_array($_G['cache']['bbcodes_display'][$_G['groupid']])) foreach($_G['cache']['bbcodes_display'][$_G['groupid']] as $tag => $bbcode) { ?>custombbcodes["<?php echo $tag;?>"] = {'prompt' : '<?php echo $bbcode['prompt'];?>'};
<?php } } ?>
</script>

<div id="<?php echo $editorid;?>_bbar" class="bbar">
<em id="<?php echo $editorid;?>_tip"></em>
<span id="<?php echo $editorid;?>_svdsecond"></span>
<a href="javascript:;" onclick="discuzcode('svd');return false;" id="<?php echo $editorid;?>_svd">Save the data</a> |
<a href="javascript:;" onclick="discuzcode('rst');return false;" id="<?php echo $editorid;?>_rst">Data recovery</a> &nbsp;&nbsp;
<?php if($editor['allowchecklength']) { ?>
<a href="javascript:;" onclick="discuzcode('chck');return false;" id="<?php echo $editorid;?>_chck">Words checks</a> |
<?php } if($editor['allowtopicreset']) { ?>
<a href="javascript:;" onclick="discuzcode('tpr');return false;" id="<?php echo $editorid;?>_tpr">Clear content</a> &nbsp;&nbsp;
<?php } if($editor['allowresize']) { ?>
<span id="<?php echo $editorid;?>_resize"><a href="javascript:;" onclick="editorsize('+');return false;">Increase the edit box</a> | <a href="javascript:;" onclick="editorsize('-');return false;">Narrow the edit box</a><img src="<?php echo STATICURL;?>image/editor/resize.gif" onmousedown="editorresize(event)" /></span>
<?php } ?>
</div></div>
<?php if(!empty($_G['setting']['pluginhooks']['post_middle'])) echo $_G['setting']['pluginhooks']['post_middle'];?><div id="post_extra" class="ptm cl">
<div id="post_extra_tb" class="cl" onselectstart="return false">
<label id="extra_additional_b" onclick="showExtra('extra_additional')"><span id="extra_additional_chk">Additional options</span></label>
<?php if($_GET['action'] == 'newthread' || $_GET['action'] == 'edit' && $isfirstpost) { if($_G['group']['allowsetreadperm']) { ?>
<label id="extra_readperm_b" onclick="showExtra('extra_readperm')"><span id="extra_readperm_chk">Read Perm</span></label>
<?php } if($_G['group']['allowreplycredit'] && !in_array($special, array(2, 3))) { if($_GET['action'] == 'newthread') { $extcreditstype = $_G['setting']['creditstransextra'][10];?><?php } else { $extcreditstype = $replycredit_rule['extcreditstype'] ? $replycredit_rule['extcreditstype'] : $_G['setting']['creditstransextra'][10];?><?php } $userextcredit = getuserprofile('extcredits'.$extcreditstype);?><?php if(($_GET['action'] == 'newthread' && $userextcredit > 0) || ($_GET['action'] == 'edit' && $isorigauthor && isfirstpost)) { ?>
<label id="extra_replycredit_b" onclick="showExtra('extra_replycredit')"><span id="extra_replycredit_chk">Replies reward</span></label>
<?php } } if(($_GET['action'] == 'newthread' && $_G['group']['allowpostrushreply'] && $special != 2) || ($_GET['action'] == 'edit' && getstatus($thread['status'], 3))) { ?>
<label id="extra_rushreplyset_b" onclick="showExtra('extra_rushreplyset')"><span id="extra_rushreplyset_chk">Grab Floor topic</span></label>
<?php } if($_G['group']['maxprice'] && !$special) { ?>
<label id="extra_price_b" onclick="showExtra('extra_price')"><span id="extra_price_chk">Theme Price</span></label>
<?php } if($_G['group']['allowposttag']) { ?>
<label id="extra_tag_b" onclick="showExtra('extra_tag')"><span id="extra_tag_chk">Topic Tags</span></label>
<?php } if($_G['group']['allowsetpublishdate'] && ($_GET['action'] == 'newthread' || ($_GET['action'] == 'edit' && $isfirstpost && $thread['displayorder'] == -4))) { ?>
<label id="extra_pubdate_b" onclick="showExtra('extra_pubdate')"><span id="extra_pubdate_chk">Timed Release</span></label>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_attribute_extra'])) echo $_G['setting']['pluginhooks']['post_attribute_extra'];?>
</div>

<div id="post_extra_c">
<?php if($_GET['action'] == 'newthread' || $_GET['action'] == 'edit' && $isfirstpost) { if(!empty($userextcredit)) { ?>
<div id="extra_replycredit_c" class="exfm cl" style="display: none;">
<div><label>Each posts reward: <input type="text" name="replycredit_extcredits" id="replycredit_extcredits" class="px pxs vm" value="<?php if($replycredit_rule['extcredits'] && $thread['replycredit'] > 0) { ?><?php echo $replycredit_rule['extcredits'];?><?php } else { ?>0<?php } ?>" onkeyup="javascript:getreplycredit();" onblur="extraCheck(0)" /> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?><?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?></label><span class="xg1">(Blank or fill 0 does not reward)</span> , <label>reward <input type="text" name="replycredit_times" id="replycredit_times" class="px pxs vm" value="<?php if($replycredit_rule['lasttimes']) { ?><?php echo $replycredit_rule['lasttimes'];?><?php } else { ?>1<?php } ?>" onkeyup="javascript:getreplycredit();"  onblur="extraCheck(0)" /> Time</label>, <label>Each person available <select id="replycredit_membertimes" name="replycredit_membertimes" class="ps vm"><?php for($i=1;$i<11;$i++) {;?><option value="<?php echo $i;?>"<?php if($replycredit_rule['membertimes'] == $i) { ?> selected="selected"<?php } ?>><?php echo $i;?></option><?php };?></select> Time</label>, <label>Winning rate <select id="replycredit_random" name="replycredit_random" class="ps vm">
 <?php for($i=100;$i>9;$i=$i-10) {;?><option value="<?php echo $i;?>"<?php if($replycredit_rule['random'] == $i) { ?> selected="selected"<?php } ?>><?php echo $i;?></option><?php };?></select> %</label></div>
<div class="xg1">Total Replies reward: <span id="replycredit_sum"><?php if($thread['replycredit']) { ?><?php echo $thread['replycredit'];?><?php } else { ?>0<?php } ?></span> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?><?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?><?php if($thread['replycredit']) { ?><span class="xg1">(This post still <?php echo $thread['replycredit'];?> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?><?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?>)</span><?php } ?>, <span id="replycredit">After-tax payment <?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?> 0</span> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?>, You have <?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?> <?php echo $userextcredit;?> <?php echo $_G['setting']['extcredits'][$extcreditstype]['unit'];?></div>
</div>
<?php } if($_G['group']['allowsetreadperm']) { ?>
<div id="extra_readperm_c" class="exfm cl" style="display:none">
<table cellspacing="0" cellpadding="0">
<tr>
<td class="xw1">Read Perm</td>
<td>
<select name="readperm" id="readperm" class="ps" style="width:90px" onchange="extraCheck(1)">
<option value="">Not limited</option><?php if(is_array($_G['cache']['groupreadaccess'])) foreach($_G['cache']['groupreadaccess'] as $val) { ?><option value="<?php echo $val['readaccess'];?>" title="Read Perm: <?php echo $val['readaccess'];?>"<?php if($thread['readperm'] == $val['readaccess']) { ?> selected="selected"<?php } ?>><?php echo $val['grouptitle'];?></option>
<?php } ?>
<option value="255"<?php if($thread['readperm'] == 255) { ?> selected="selected"<?php } ?>>Highest Perm</option>
</select>
<span class="xg1">Reading Access descending order higher than or equal to a selected group of users can read</span>
</td>
</tr>
</table>
</div>
<?php } if($_G['group']['maxprice'] && !$special) { ?>
<div id="extra_price_c" class="exfm cl" style="display:none">
Selling price:
<input type="text" id="price" name="price" class="px pxs" value="<?php echo $thread['pricedisplay'];?>" onblur="extraCheck(2)" /> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>
<span class="xg1">(Highest <?php echo $_G['group']['maxprice'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?>)</span>
<?php if($_G['group']['maxprice'] && ($_GET['action'] == 'newthread' || $_GET['action'] == 'edit' && $isfirstpost)) { if($_G['setting']['maxincperthread']) { ?><p class="xg1">The theme sale of the maximum income limit for the <?php echo $_G['setting']['maxincperthread'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?>&nbsp;&nbsp;&nbsp;&nbsp;</p><?php } if($_G['setting']['maxchargespan']) { ?><p class="xg1">Theme up to sale <?php echo $_G['setting']['maxchargespan'];?> Hours<?php if($_GET['action'] == 'edit' && $freechargehours) { ?>, This topic also sales <?php echo $freechargehours;?> Hours<?php } ?></p><?php } } ?>
</div>
<?php } if($_G['group']['allowposttag']) { ?>
<div id="extra_tag_c" class="exfm cl" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td class="xw1">Tag</td>
<td>
<input type="text" class="px vm" size="60" id="tags" name="tags" value="<?php echo $postinfo['tag'];?>" onblur="extraCheck(4)" />
<a href="javascript:;" id="clickbutton[]" class="xi2" onclick="relatekw('-1','-1');doane();">Auto obtain</a><span class="pipe">|</span><a href="javascript:;" id="choosetag" class="xi2" onclick="showWindow(this.id, 'forum.php?mod=tag', 'get', 0)">Select the tab</a>
</td>
</tr>
<tr>
<td></td>
<td>
<p class="xg1">Separate multiple tags with commas or spaces can fill up to five</p><?php $recent_use_tag = recent_use_tag();?><?php if($recent_use_tag) { ?>
<p class="mtn">Recently used tags:&nbsp;<?php $tagi = 0;?><?php if(is_array($recent_use_tag)) foreach($recent_use_tag as $var) { if($tagi) { ?>, <?php } ?><a href="javascript:;" class="xi2" onclick="$('tags').value == '' ? $('tags').value += '<?php echo $var;?>' : $('tags').value += ',<?php echo $var;?>';extraCheck(4);doane();"><?php echo $var;?></a><?php $tagi++;?><?php } ?>
</p>
<?php } ?>
</td>
</tr>
</table>
</div>
<?php } if(($_GET['action'] == 'newthread' && $_G['group']['allowpostrushreply'] && $special != 2) || ($_GET['action'] == 'edit' && getstatus($thread['status'], 3))) { ?>
<div class="exfm cl" id="extra_rushreplyset_c" style="display: none;">
<div class="sinf sppoll z">
<dl>
<dt><span style="width: 4em">&nbsp;</span></dt>
<dd><label for="rushreply"><input type="checkbox" name="rushreply" id="rushreply" class="pc vm" value="1" <?php if($_GET['action'] == 'edit' && getstatus($thread['status'], 3)) { ?>disabled="disabled" checked="checked"<?php } ?> onclick="extraCheck(3)" /> The topic Set rob Floor</label></dd>
<dt><label>Grab the floor time:</label></dt>
<dd>
<div>
<input type="text" name="rushreplyfrom" id="rushreplyfrom" class="px" onclick="showcalendar(event, this, true)" autocomplete="off" value="<?php echo $postinfo['rush']['starttimefrom'];?>" onkeyup="$('rushreply').checked = true;" /><span> ~ </span><input type="text" onclick="showcalendar(event, this, true)" autocomplete="off" id="rushreplyto" name="rushreplyto" class="px" value="<?php echo $postinfo['rush']['starttimeto'];?>" onkeyup="$('rushreply').checked = true;" />
</div>
</dd>
<dt><label>Reward Floor:</label></dt>
<dd>
<input type="text" name="rewardfloor" id="rewardfloor" class="px oinf" value="<?php echo $postinfo['rush']['rewardfloor'];?>" onkeyup="$('rushreply').checked = true;" />
<p class="xg1">Multiple floors separated by a comma, *can match any number or null values​​, such as: 8,88,*88</p>
</dd>
</dl>
</div>
<div class="sadd z">
<dl>
<dt>&nbsp;</dt>
<dd>&nbsp;</dd>
<dt><label for="stopfloor">Replies restrictions: </label></dt>
<dd>
<input type="text" name="replylimit" id="replylimit" class="px" autocomplete="off" value="<?php echo $postinfo['rush']['replylimit'];?>" onkeyup="$('rushreply').checked = true;" /> <span class="xg1">Each user posts a maximum number of</span>
</dd>
<dt><label for="stopfloor">Deadline floors:</label></dt>
<dd>
<input type="text" name="stopfloor" id="stopfloor" class="px" autocomplete="off" value="<?php echo $postinfo['rush']['stopfloor'];?>" onkeyup="$('rushreply').checked = true;" />
</dd>
<dt><label for="creditlimit"><?php if($_G['setting']['creditstransextra']['11']) { ?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['11']]['title'];?><?php } else { ?>Credits<?php } ?>Lower limit:</label></dt>
<dd>
<input type="text" name="creditlimit" id="creditlimit" class="px" autocomplete="off" value="<?php echo $postinfo['rush']['creditlimit'];?>" onkeyup="$('rushreply').checked = true;" />
<p class="xg1"><?php if($_G['setting']['creditstransextra']['11']) { ?>(<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['11']]['title'];?>)<?php } else { ?>Total credit<?php } ?>Larger than the set in order to participate in the grab Floor, may from time fill</p>
</dd>
</dl>
</div>
</div>
<?php } if($_G['group']['allowsetpublishdate'] && ($_GET['action'] == 'newthread' || ($_GET['action'] == 'edit' && $isfirstpost && $thread['displayorder'] == -4))) { ?>
<div class="exfm cl" id="extra_pubdate_c" style="display: none;">
<label><input type="checkbox" name="cronpublish" onclick="if(this.checked) {$('cronpublishdate').click();doane(event,false);};extraCheck(5);hidenFollowBtn(this.checked);" id="cronpublish" value="true" class="pc"<?php if($cronpublish) { ?> checked="checked"<?php } ?> />Timed Release</label>
<input type="text" name="cronpublishdate" id="cronpublishdate" class="px" onclick="showcalendar(event, this, true, false, false, true);" autocomplete="off" value="<?php echo $cronpublishdate;?>" onchange="if(this.value) $('cronpublish').checked = true;">
</div>
<?php } } ?>

<div class="exfm cl" id="extra_additional_c" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td class="xw1" valign="top">Basic properties</td>
<td>
<?php if($_GET['action'] != 'edit') { if($_G['group']['allowanonymous']) { ?><label for="isanonymous"><input type="checkbox" name="isanonymous" id="isanonymous" class="pc" value="1" />Anonymously Post</label><?php } } else { if($_G['group']['allowanonymous'] || (!$_G['group']['allowanonymous'] && $orig['anonymous'])) { ?><label for="isanonymous"><input type="checkbox" name="isanonymous" id="isanonymous" class="pc" value="1" <?php if($orig['anonymous']) { ?>checked="checked"<?php } ?> />Anonymously Post</label><?php } } if($_GET['action'] == 'newthread' || $_GET['action'] == 'edit' && $isfirstpost) { ?>
<label for="hiddenreplies"><input type="checkbox" name="hiddenreplies" id="hiddenreplies" class="pc"<?php if($thread['hiddenreplies']) { ?> checked="checked"<?php } ?> value="1">Replies only author visible</label>
<?php } if($_G['uid'] && ($_GET['action'] == 'newthread' || $_GET['action'] == 'edit' && $isfirstpost) && $special != 3) { ?>
<label for="ordertype"><input type="checkbox" name="ordertype" id="ordertype" class="pc" value="1" <?php echo $ordertypecheck;?> />Replies descending</label>
<?php } if(($_GET['action'] == 'newthread' || $_GET['action'] == 'edit' && $isfirstpost)) { ?>
<label for="allownoticeauthor"><input type="checkbox" name="allownoticeauthor" id="allownoticeauthor" class="pc" value="1"<?php if($allownoticeauthor) { ?> checked="checked"<?php } ?> />Receive notification of replies</label>
<?php } if($_GET['action'] != 'edit' && helper_access::check_module('feed') && $_G['forum']['allowfeed']) { ?>
<label for="addfeed"><input type="checkbox" name="addfeed" id="addfeed" class="pc" value="1" <?php echo $addfeedcheck;?>>Send dynamic</label>
<?php } ?>
<label for="usesig"><input type="checkbox" name="usesig" id="usesig" class="pc" value="1" <?php if(!$_G['group']['maxsigsize']) { ?>disabled <?php } else { ?><?php echo $usesigcheck;?> <?php } ?>/>Use signature</label>
</td>
</tr>
<tr>
<td class="xw1" valign="top">Text Features</td>
<td>
<?php if(($_G['forum']['allowhtml'] || ($_GET['action'] == 'edit' && ($orig['htmlon'] & 1))) && $_G['group']['allowhtml']) { ?>
<label for="htmlon"><input type="checkbox" name="htmlon" id="htmlon" class="pc" value="1" <?php echo $htmloncheck;?> />HTML Code</label>
<?php } else { ?>
<label for="htmlon"><input type="checkbox" name="htmlon" id="htmlon" class="pc" value="0" <?php echo $htmloncheck;?> disabled="disabled" />HTML Code</label>
<?php } ?>
<label for="allowimgcode"><input type="checkbox" id="allowimgcode" class="pc" disabled="disabled"<?php if($_G['forum']['allowimgcode']) { ?> checked="checked"<?php } ?> />[img] Code</label>
<?php if($_G['forum']['allowimgcode']) { ?>
<label for="allowimgurl"><input type="checkbox" id="allowimgurl" class="pc" checked="checked" />Resolution Picture Link</label>
<?php } ?>
<label for="parseurloff"><input type="checkbox" name="parseurloff" id="parseurloff" class="pc" value="1" <?php echo $urloffcheck;?> />DisableLink to identify</label>
<label for="smileyoff"><input type="checkbox" name="smileyoff" id="smileyoff" class="pc" value="1" <?php echo $smileyoffcheck;?> />DisableExpression</label>
<label for="bbcodeoff"><input type="checkbox" name="bbcodeoff" id="bbcodeoff" class="pc" value="1" <?php echo $codeoffcheck;?> />DisableEditor code</label>
<?php if($_G['group']['allowimgcontent']) { ?>
<label for="imgcontent"><input type="checkbox" name="imgcontent" id="imgcontent" class="pc" value="1" <?php echo $imgcontentcheck;?> onclick="switchEditor(this.checked?0:1);$('e_switchercheck').checked=this.checked;" />Content generated picture</label>
<?php } else { ?>
<label for="imgcontent"><input type="checkbox" name="imgcontent" id="imgcontent" class="pc" value="0" <?php echo $imgcontentcheck;?> disabled="disabled"/>Content generated picture</label>
<?php } ?>
</td>
</tr>
<?php if($_GET['action'] == 'newthread' && $_G['forum']['ismoderator'] && ($_G['group']['allowdirectpost'] || !$_G['forum']['modnewposts'])) { if($_GET['action'] == 'newthread' && $_G['forum']['ismoderator'] && ($_G['group']['allowdirectpost'] || !$_G['forum']['modnewposts']) && ($_G['group']['allowstickthread'] || $_G['group']['allowdigestthread'])) { ?>
<tr>
<td class="xw1" valign="top">Manage operations</td>
<td>
<?php if($_G['group']['allowstickthread']) { ?>
<label for="sticktopic"><input type="checkbox" name="sticktopic" id="sticktopic" class="pc" value="1" <?php echo $stickcheck;?> />Thread Top</label>
<?php } if($_G['group']['allowdigestthread']) { ?>
<label for="addtodigest"><input type="checkbox" name="addtodigest" id="addtodigest" class="pc" value="1" <?php echo $digestcheck;?> />Digest Topics</label>
<?php } ?>
</td>
</tr>
<?php } } elseif($_GET['action'] == 'edit' && $_G['forum_auditstatuson']) { ?>
<tr>
<td class="xw1" valign="top">Manage operations</td>
<td>
<label for="audit"><input type="checkbox" name="audit" id="audit" class="pc" value="1">By audit</label>
</td>
</tr>
<?php } if($_GET['action'] == 'edit' && $isorigauthor && ($isfirstpost && $thread['replies'] < 1 || !$isfirstpost) && !$rushreply && $_G['setting']['editperdel']) { ?>
<tr>
<td class="xw1" valign="top">Del this post</td>
<td>
<button type="button" class="pn xi1" onclick="deleteThread();"><span>Del this post</span></button>
<input type="hidden" name="delete" id="delete" value="0" />
Del can not be undone<?php if($thread['special'] == 3) { ?>, , Return reward costs, non-refundable fee<?php } ?>
</td>
</tr>
<?php } ?>
</table>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['post_attribute_extra_body'])) echo $_G['setting']['pluginhooks']['post_attribute_extra_body'];?>
</div>
</div>
<?php if($_GET['action'] != 'edit' && checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm"><?php $_G['sechashi'] = !empty($_G['cookie']['sechashi']) ? $_G['sechash'] + 1 : 0;
$sechash = 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'].$_G['sechashi'];
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex;?><?php
$__STATICURL = STATICURL;$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($secqaacheck) { 
$seccheckhtml .= <<<EOF

{$sectplqaa['0']}Q&A{$sectplqaa['1']}<input name="secanswer" id="secqaaverify_{$sechash}" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec('qaa', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updatesecqaa('{$sechash}');doane(event);" class="xi2">Change one</a>
<span id="checksecqaaverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplqaa['2']}<span id="secqaa_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updatesecqaa('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplqaa['3']}

EOF;
 } if($seccodecheck) { 
$seccheckhtml .= <<<EOF

{$sectplcode['0']}Verif code{$sectplcode['1']}<input name="seccodeverify" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="
EOF;
 if($_G['setting']['seccodedata']['type'] != 1) { 
$seccheckhtml .= <<<EOF
ime-mode:disabled;
EOF;
 } 
$seccheckhtml .= <<<EOF
width:100px" class="txt px vm" onblur="checksec('code', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="xi2">Change one</a>
<span id="checkseccodeverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplcode['2']}<span id="seccode_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}

EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow);?><?php if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } ?></div>
<?php } ?>

<div class="mtm mbm pnpost">
<a href="home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;fid=<?php echo $_G['fid'];?>" class="y" target="_blank">This forum Credits Rules</a>
<button type="submit" id="postsubmit" class="pn pnc" value="true" name="<?php if($_GET['action'] == 'newthread') { ?>topicsubmit<?php } elseif($_GET['action'] == 'reply') { ?>replysubmit<?php } elseif($_GET['action'] == 'edit') { ?>editsubmit<?php } ?>">
<?php if($_GET['action'] == 'newthread') { if($special == 0) { ?><span>Post a Topic</span>
<?php } elseif($special == 1) { ?><span>Create polls</span>
<?php } elseif($special == 2) { ?><span>Selling goods</span>
<?php } elseif($special == 3) { ?><span>Post Reward</span>
<?php } elseif($special == 4) { ?><span>Create activities</span>
<?php } elseif($special == 5) { ?><span>Create debate</span>
<?php } elseif($special == 127) { ?>
<span><?php if($buttontext) { ?><?php echo $buttontext;?><?php } else { ?>Post a Topic<?php } ?></span>
<?php } } elseif($_GET['action'] == 'reply' && !empty($_GET['addtrade'])) { ?><span>Add goods</span>
<?php } elseif($_GET['action'] == 'reply') { ?><span>Participation / Reply Topic</span>
<?php } elseif($_GET['action'] == 'edit' && $isfirstpost && $thread['displayorder'] == -4) { ?>
<span>Post a Topic</span>
<?php } elseif($_GET['action'] == 'edit') { ?><span>Save</span>
<?php } ?>
</button>
<?php if($_G['uid']) { ?>
<input type="hidden" id="postsave" name="save" value="" />
<?php if($_GET['action'] == 'newthread' && !$modnewthreads || $_GET['action'] == 'edit' && $isfirstpost && !$modnewreplies && $thread['displayorder'] == -4) { ?>
<button type="button" id="postsubmit" class="pn" value="true" onclick="$('postsave').value = 1;$('postsubmit').click();"><em>Save Draft</em></button>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_btn_extra'])) echo $_G['setting']['pluginhooks']['post_btn_extra'];?>
<?php if(helper_access::check_module('follow') && $_GET['action'] != 'edit') { ?>
<span id="adddynamicspan"><label><input type="checkbox" name="adddynamic" id="adddynamic" value="true" class="pc" <?php if($_G['forum']['allowfeed'] && !$_G['tid'] && empty($_G['forum']['viewperm'])) { ?>checked="checked"<?php } ?> />Relay to the audience</label></span>
<?php } if(!empty($_G['setting']['pluginhooks']['post_sync_method'])) { ?>
<span>
Synchronized to this topic:
<?php if(!empty($_G['setting']['pluginhooks']['post_sync_method'])) echo $_G['setting']['pluginhooks']['post_sync_method'];?>
</span>
<?php } if($special == 2) { ?>
<label><input type="checkbox" name="continueadd" value="yes" class="pc" />Continue to add goods</label>
<?php } if(helper_access::check_module('group') && $mygroups && $_G['forum']['status'] != 3) { ?>
<span id="adddynamicspan"><label>&nbsp;&nbsp;From group:<select name="mygroupid"><option value="">Select My Groups</option><?php if(is_array($mygroups)) foreach($mygroups as $mygroupid => $mygroupname) { ?><option value="<?php echo $mygroupid;?>__<?php echo $mygroupname;?>" <?php if($selectgroupid == $mygroupid) { ?> selected<?php } ?>><?php echo $mygroupname;?></option><?php } ?></select></label></span>
<?php } ?>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['post_bottom'])) echo $_G['setting']['pluginhooks']['post_bottom'];?>
</div>
</div>
</div>
</form>
<iframe name="ajaxpostframe" id="ajaxpostframe" style="display: none;"></iframe>

<div id="<?php echo $editorid;?>_menus" class="editorrow" style="overflow: hidden; margin-top: -5px; height: 0; border: none; background: transparent;"><div id="<?php echo $editorid;?>_editortoolbar" class="editortoolbar"><?php $fontoptions = array("Arial", "New Arial", "Blackbody", "Microsoft elegant black", "Arial", "Verdana", "Mingliu", "Helvetica", "Trebuchet MS", "Tahoma", "Impact", "Times New Roman", "FangSong,FangSong_GB2312", "Block type upon,Block type upon_GB2312")?><div class="p_pop fnm" id="<?php echo $editorid;?>_fontname_menu" style="display: none">
<ul unselectable="on"><?php if(is_array($fontoptions)) foreach($fontoptions as $fontname) { ?><li onclick="discuzcode('fontname', '<?php echo $fontname;?>')" style="font-family: <?php echo $fontname;?>" unselectable="on"><a href="javascript:;" title="<?php echo $fontname;?>"><?php echo $fontname;?></a></li>
<?php } ?>
</ul>
</div><?php $sizeoptions = array(1, 2, 3, 4, 5, 6, 7)?><div class="p_pop fszm" id="<?php echo $editorid;?>_fontsize_menu" style="display: none">
<ul unselectable="on"><?php if(is_array($sizeoptions)) foreach($sizeoptions as $size) { ?><li onclick="discuzcode('fontsize', <?php echo $size;?>)" unselectable="on"><a href="javascript:;" title="<?php echo $size;?>"><font size="<?php echo $size;?>" unselectable="on"><?php echo $size;?></font></a></li>
<?php } ?>
</ul>
</div>

</div>

<script type="text/javascript">smilies_show('smiliesdiv', <?php echo $_G['setting']['smcols'];?>, editorid + '_');showHrBox(editorid+'_inserthorizontalrule');showHrBox(editorid+'_postbg', 'postbg');</script><?php
$creditstring = <<<EOF

EOF;
 if(is_array($postattachcredits)) foreach($postattachcredits as $id => $credit) { if($credit != '') { 
$creditstring .= <<<EOF
{$_G['setting']['extcredits'][$id]['title']} 
EOF;
 if($credit >= 0) { 
$creditstring .= <<<EOF
+{$credit}
EOF;
 } else { 
$creditstring .= <<<EOF
{$credit}
EOF;
 } 
$creditstring .= <<<EOF
 {$_G['setting']['extcredits'][$id]['unit']} &nbsp;
EOF;
 } } 
$creditstring .= <<<EOF

EOF;
?>


<script type="text/javascript">
function switchImagebutton(btn) {
switchButton(btn, 'image');
$(editorid + '_image_menu').style.height = '';
doane();
}
function switchAttachbutton(btn) {
switchButton(btn, 'attach');
doane();
}
</script>
<div class="p_pof" id="<?php echo $editorid;?>_image_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l">&nbsp;&nbsp;</td><td class="m_c"><div class="mtm">
<ul class="tb tb_s cl" id="<?php echo $editorid;?>_image_ctrl" style="margin-top:0;margin-bottom:0;">
<li class="y"><span class="flbc" onclick="hideAttachMenu('image')">Close</span></li>
<?php if($allowpostimg) { ?>
<li class="current" id="<?php echo $editorid;?>_btn_imgattachlist"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('imgattachlist');">Upload pictures</a></li>
<?php if($allowuploadtoday) { ?>
<li id="<?php echo $editorid;?>_btn_local" style="display:none;" did="<?php echo $editorid;?>_btn_imgattachlist|local"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('local');">Common Upload</a></li>
<?php } } if(helper_access::check_module('album')) { ?><li <?php if(!$allowpostimg) { ?>class="current"<?php } ?> id="<?php echo $editorid;?>_btn_albumlist"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('albumlist');">Picture album</a></li><?php } ?>
<li <?php if(!$allowpostimg && !helper_access::check_module('album')) { ?>class="current"<?php } ?> id="<?php echo $editorid;?>_btn_www"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('www');">Network picture</a></li>

<?php if(!empty($_G['setting']['pluginhooks']['post_image_btn_extra'])) echo $_G['setting']['pluginhooks']['post_image_btn_extra'];?>
</ul>
<div unselectable="on" id="<?php echo $editorid;?>_www" <?php if($allowpostimg || helper_access::check_module('album')) { ?>style="display: none;"<?php } ?>>
<div class="p_opt popupfix">
<table cellpadding="0" cellspacing="0" width="100%">
<tr class="xg1">
<th width="74%" class="pbn">Please enter the picture address</th>
<th width="13%" class="pbn">Width (optional)</th>
<th width="13%" class="pbn">High (optional)</th>
</tr>
<tr>
<td><input type="text" id="<?php echo $editorid;?>_image_param_1" onchange="loadimgsize(this.value)" style="width: 95%;" value="" class="px" autocomplete="off" /></td>
<td><input id="<?php echo $editorid;?>_image_param_2" size="3" value="" class="px p_fre" autocomplete="off" /></td>
<td><input id="<?php echo $editorid;?>_image_param_3" size="3" value="" class="px p_fre" autocomplete="off" /></td>
</tr>
</table>
</div>
<div class="o">
<button type="button" class="pn pnc" id="<?php echo $editorid;?>_image_submit"><strong>Submit</strong></button>
</div>
</div>
<?php if($allowpostimg) { ?>

<div unselectable="on" id="<?php echo $editorid;?>_local" style="display: none;">
<div class="p_opt">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tbody id="imgattachbodyhidden" style="display:none"><tr>
<td class="atnu"><span id="imglocalno[]"><img src="<?php echo STATICURL;?>image/filetype/common_new.gif" /></span></td>
<td class="atna">
<span id="imgdeschidden[]" style="display:none">
<span id="imglocalfile[]"></span>
</span>
<input type="hidden" name="imglocalid[]" />
</td>
<td class="attc"><span id="imgcpdel[]"></span></td>
</tr></tbody>
</table>
<div class="p_tbl"><table cellpadding="0" cellspacing="0" summary="post_attachbody" border="0" width="100%"><tbody id="imgattachbody"></tbody></table></div>
<div class="upbk pbm bbda">
<div id="imgattachbtnhidden" style="display:none"><span><form name="imgattachform" id="imgattachform" method="post" autocomplete="off" action="misc.php?mod=swfupload&amp;operation=upload&amp;simple=1&amp;type=image" target="attachframe" <?php echo $enctype;?>><input type="hidden" name="uid" value="<?php echo $_G['uid'];?>"><input type="hidden" name="hash" value="<?php echo md5(substr(md5($_G['config']['security']['authkey']), 8).$_G['uid']); ?>"><input type="file" name="Filedata" size="45" class="filedata" /></form></span></div>
<div id="imgattachbtn" class="ptm pbn"></div>
<p id="imguploadbtn">
<button class="pn pnc vm" type="button" onclick="uploadAttach(0, 0, 'img')"><span>Uplaod</span></button>
<span class="xg1">&larr;After you select the file and click the "Upload" button</span>
</p>
<p id="imguploading" style="display: none;"><img src="<?php echo IMGDIR;?>/uploading.gif" style="vertical-align: middle;" /> Upload, please wait, you can<a href="javascript:;" onclick="hideMenu()">Temporarily closed the small window</a> Upload is complete, you will be notified</p>
</div>
<div class="notice upnf">
File size: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>Less than <?php echo $maxattachsize_mb;?> <?php } else { ?>Without limiting the size<?php } ?></span>
<?php if($imgexts) { ?>
, Available name extensions: <span class="xi1"><?php echo $imgexts;?></span>&nbsp;
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="Points Instruction">Each upload an attachment to your&nbsp;<?php echo $creditstring;?></a>
<?php } if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
You can upload today <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> Files<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> Or <?php } ?>Total size <strong><?php echo $allowuploadsize;?></strong> less than<?php } } else { ?>
<span class="xi1 xw1">Today you can not upload attachments</span>
<?php } } ?>
</div>
</div>
<div class="o">
<button onclick="hideAttachMenu('image')" class="pn pnc">
<strong>Confirm</strong>
</button>
</div>
</div>


<div unselectable="on" id="<?php echo $editorid;?>_imgattachlist">
<div class="p_opt">
<?php if($allowuploadtoday) { ?>
<div class="pbm bbda cl">
<div id="imgattach_notice" class="y" <?php if(empty($imgattachs['used'])) { ?> style="display: none"<?php } ?>>
<?php if(helper_access::check_module('album') && $_G['group']['allowupload']) { ?>
<div id="uploadPanel">
<label style="margin-right:10px;"><input type="checkbox" name="selectallimg" class="pc" value="1" onchange="selectAllSaveImg(this.checked);" onpropertychange="selectAllSaveImg(this.checked);" />All</label>
Save the selected pictures to the album:
<select name="uploadalbum" id="uploadalbum" class="ps vm" onchange="if(this.value == '-1') {selectCreateTab(0);}">
<?php if($albumlist) { if(is_array($albumlist)) foreach($albumlist as $album) { ?><option value="<?php echo $album['albumid'];?>"><?php echo $album['albumname'];?></option>
<?php } } else { ?>
<option value="-2">-------</option>
<?php } ?>
<option value="-1" style="color:red;">+Create a new album</option>
</select>
</div>
<div id="createalbum" style="display:none">
<?php if($_G['setting']['albumcategorystat'] && !empty($_G['cache']['albumcategory'])) { echo category_showselect('album', 'albumcatid', !$_G['setting']['albumcategoryrequired'] ? true : false, $_GET['catid']);?>&nbsp;
<?php } ?>
<input type="text" name="newalbum" id="newalbum" class="px vm" size="15" value="Please enter an album name"  onfocus="if(this.value == 'Please enter an album name') {this.value = '';}" onblur="if(this.value == '') {this.value = 'Please enter an album name';}" />&nbsp;<button type="button" class="pn pnc" onclick="createNewAlbum();"><span>Create a new album</span></button><button type="button" class="pn" onclick="selectCreateTab(1);"><span>Cancel</span></button>
</div>
<?php } ?>
</div>
<span id="imgSpanButtonPlaceholder"></span>
</div>
<?php } ?>
<div class="upfilelist upfl bbda">
<?php if(!empty($imgattachs['used'])) { $imagelist = $imgattachs['used'];?><?php include template('forum/ajax_imagelist'); } ?>
<div id="imgattachlist"></div>
<div id="unusedimgattachlist"></div>

<?php if($allowuploadtoday) { ?>

<div class="fieldset flash" id="imgUploadProgress"></div>

<script type="text/javascript">
function createNewAlbum() {
var inputObj = $('newalbum');
if(inputObj.value == '' || inputObj.value == 'Please enter an album name') {
inputObj.value = 'Please enter an album name';
} else {
var x = new Ajax();
x.get('home.php?mod=misc&ac=ajax&op=createalbum&inajax=1&name=' + inputObj.value, function(s){
var aid = parseInt(s);
var albumList = $('uploadalbum');
var haveoption = false;
for(var i = 0; i < albumList.options.length; i++) {
if(albumList.options[i].value == aid) {
albumList.selectedIndex = i;
haveoption = true;
break;
}
}
if(!haveoption) {
var oOption = document.createElement("OPTION");
oOption.text = trim(inputObj.value);
oOption.value = aid;
albumList.options.add(oOption);
albumList.selectedIndex = albumList.options.length-1;
}
inputObj.value = ''
});
selectCreateTab(1)
}
}
function selectCreateTab(flag) {
var vwObj = $('uploadPanel');
var opObj = $('createalbum');
var selObj = $('uploadalbum');
if(flag) {
vwObj.style.display = '';
opObj.style.display = 'none';
selObj.value = selObj.options[0].value;
} else {
vwObj.style.display = 'none';
opObj.style.display = '';
}
}
</script>
<?php } ?>
</div>
<div class="notice upnf">
Click to add pictures to post content
<br />File size: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>Less than <?php echo $maxattachsize_mb;?> <?php } else { ?>Without limiting the size<?php } ?></span>
<?php if($imgexts) { ?>
, Available name extensions: <span class="xi1"><?php echo $imgexts;?></span>&nbsp;
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="Points Instruction">Each upload an attachment to your&nbsp;<?php echo $creditstring;?></a>
<?php } if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
You can upload today <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> Files<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> Or <?php } ?>Total size <strong><?php echo $allowuploadsize;?></strong> less than<?php } } else { ?>
<span class="xi1 xw1">Today you can not upload attachments</span>
<?php } } ?>
</div>
</div>
<div class="o">
<button onclick="hideAttachMenu('image')" class="pn pnc">
<strong>Confirm</strong>
</button>
</div>
</div>
<?php } if(helper_access::check_module('album')) { ?>
<div unselectable="on" id="<?php echo $editorid;?>_albumlist" <?php if($allowpostimg) { ?>style="display: none;"<?php } ?>>
<div class="p_opt">
<div class="upfilelist pbm bbda">
Select a picture from my album:
<select onchange="if(this.value) {ajaxget('forum.php?mod=post&action=albumphoto&aid='+this.value, 'albumphoto');}">
<option value="">Select an album</option><?php if(is_array($albumlist)) foreach($albumlist as $album) { ?><option value="<?php echo $album['albumid'];?>"><?php echo $album['albumname'];?></option>
<?php } ?>
</select>
<div id="albumphoto"></div>
</div>
<p class="notice">Click to add pictures to post content</p>
</div>
<div class="o">
<button onclick="hideAttachMenu('image')" class="pn pnc">
<strong>Confirm</strong>
</button>
</div>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_image_tab_extra'])) echo $_G['setting']['pluginhooks']['post_image_tab_extra'];?>
</div></td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table>
</div>

<?php if($_G['group']['allowpostattach']) { ?>
<div class="p_pof upf" id="<?php echo $editorid;?>_attach_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l">&nbsp;&nbsp;</td><td class="m_c"><div class="mtm">
<ul class="tb tb_s cl" id="<?php echo $editorid;?>_attach_ctrl" style="margin-top:0;margin-bottom:0;">
<li class="y"><span class="flbc" onclick="hideAttachMenu('attach')">Close</span></li>
<li class="current" id="<?php echo $editorid;?>_btn_attachlist"><a href="javascript:;" hidefocus="true" onclick="switchAttachbutton('attachlist');">Uplaod Attach</a></li>
<?php if($allowuploadtoday) { ?>
<li id="<?php echo $editorid;?>_btn_upload" style="display: none;" did="<?php echo $editorid;?>_btn_attachlist|upload"><a href="javascript:;" hidefocus="true" onclick="switchAttachbutton('upload');">Common Upload</a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_attach_btn_extra'])) echo $_G['setting']['pluginhooks']['post_attach_btn_extra'];?>
</ul>

<div class="p_opt" unselectable="on" id="<?php echo $editorid;?>_upload" style="display: none;">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tbody id="attachbodyhidden" style="display:none"><tr>
<td class="atnu"><span id="localno[]"><img src="<?php echo STATICURL;?>image/filetype/common_new.gif" /></span></td>
<td class="atna">
<span id="deschidden[]" style="display:none">
<span id="localfile[]"></span>
</span>
<input type="hidden" name="localid[]" />
</td>
<td class="attc"><span id="cpdel[]"></span></td>
</tr></tbody>
</table>
<div class="p_tbl"><table cellpadding="0" cellspacing="0" summary="post_attachbody" border="0" width="100%"><tbody id="attachbody"></tbody></table></div>
<div class="upbk pbm bbda">
<div id="attachbtnhidden" style="display:none"><span><form name="attachform" id="attachform" method="post" autocomplete="off" action="misc.php?mod=swfupload&amp;operation=upload&amp;simple=1" target="attachframe" <?php echo $enctype;?>><input type="hidden" name="uid" value="<?php echo $_G['uid'];?>"><input type="hidden" name="hash" value="<?php echo md5(substr(md5($_G['config']['security']['authkey']), 8).$_G['uid']); ?>"><input type="file" name="Filedata" size="45" class="fldt" /></form></span></div>
<div id="attachbtn" class="ptm pbn"></div>
<p id="uploadbtn">
<button type="button" class="pn pnc vm" onclick="uploadAttach(0, 0)"><span>Uplaod</span></button>
<span class="xg1">&larr;After you select the file and click the "Upload" button</span>
</p>
<p id="uploading" style="display: none;"><img src="<?php echo IMGDIR;?>/uploading.gif" style="vertical-align: middle;" /> Upload, please wait, you can<a href="javascript:;" onclick="hideMenu()">Temporarily closed the small window</a> Upload is complete, you will be notified</p>
</div>
<div class="notice upnf">
File size: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>Less than <?php echo $maxattachsize_mb;?> <?php } else { ?>Without limiting the size<?php } ?></span>
<?php if($_G['group']['attachextensions']) { ?>
, Available name extensions: <span class="xi1"><?php echo $_G['group']['attachextensions'];?></span>&nbsp;
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="Points Instruction">Each upload an attachment to your&nbsp;<?php echo $creditstring;?></a>
<?php } if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
You can upload today <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> Files<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> Or <?php } ?>Total size <strong><?php echo $allowuploadsize;?></strong> less than<?php } } else { ?>
<span class="xi1 xw1">Today you can not upload attachments</span>
<?php } } ?>
</div>
</div>


<div class="p_opt post_tablelist" unselectable="on" id="<?php echo $editorid;?>_attachlist">
<?php if($allowuploadtoday) { ?>
<div class="pbm bbda">
<span id="spanButtonPlaceholder"></span>
</div>
<?php } ?>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="attach_tblheader" class="mtn bbs"<?php if(empty($attachs['used'])) { ?> style="display: none"<?php } ?>>
<tr>
<td class="atnu"></td>
<td class="atna pbn">File name ( <a onclick="insertAllAttachTag();return false;" href="javascript:;" class="xi2">Insert all attach</a> )</td>
<td class="atds pbn">Description</td>
<?php if($_G['group']['allowsetattachperm']) { ?>
<td class="attv pbn">
Read Perm
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" style="margin: 0;" onmouseover="showTip(this)" tip="Reading Access descending order higher than or equal to a selected group of users can read" />
</td>
<?php } if($_G['group']['maxprice']) { ?><td class="attp pbn"><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></td><?php } ?>
<td class="attc"></td>
</tr>
</table>
<div class="upfl">
<?php if(!empty($attachs['used'])) { $attachlist = $attachs['used'];?><?php include template('forum/ajax_attachlist'); } ?>
<div id="attachlist"></div>
<div id="unusedattachlist"></div>

<?php if($allowuploadtoday) { ?>
<div class="fieldset flash" id="fsUploadProgress"></div>
<?php } ?>

</div>
<div class="notice upnf">
<p id="attach_notice"<?php if(empty($attachs['used']) && empty($attachs['unused'])) { ?> style="display: none"<?php } ?>>Click the attachment file name to be added to the post content<?php if($_G['setting']['allowattachurl']) { ?>, "attach://" Address in the annex to the the beginning of the support any person Download Please cautious to add<?php } ?></p>
File size: <span class="xi1"><?php if($_G['group']['maxattachsize']) { ?>Less than <?php echo $maxattachsize_mb;?> <?php } else { ?>Without limiting the size<?php } ?></span>
<?php if($_G['group']['attachextensions']) { ?>
, Available name extensions: <span class="xi1"><?php echo $_G['group']['attachextensions'];?></span>&nbsp;
<?php } if($creditstring) { ?>
<br /><a href="forum.php?mod=faq&amp;action=credits&amp;fid=<?php echo $_G['fid'];?>" target="_blank" title="Points Instruction">Each upload an attachment to your&nbsp;<?php echo $creditstring;?></a>
<?php } if($_G['group']['maxattachnum'] || $_G['group']['maxsizeperday']) { ?><br /><?php if($allowuploadtoday) { ?>
You can upload today <?php if($_G['group']['maxattachnum']) { ?><strong><?php echo $allowuploadnum;?></strong> Files<?php } if($_G['group']['maxsizeperday']) { if($_G['group']['maxattachnum']) { ?> Or <?php } ?>Total size <strong><?php echo $allowuploadsize;?></strong> less than<?php } } else { ?>
<span class="xi1 xw1">Today you can not upload attachments</span>
<?php } } if($_G['group']['maxprice'] && $_G['setting']['maxincperthread']) { ?><br />Accessories available on the highest income ceiling <?php echo $_G['setting']['maxincperthread'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
</div>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['post_attach_tab_extra'])) echo $_G['setting']['pluginhooks']['post_attach_tab_extra'];?>
</div>
<div class="o">
<button onclick="hideAttachMenu('attach')" class="pn pnc" id="attach_confirms">
<strong>Confirm</strong>
</button>
</div>
</td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table>
</div>
<?php } ?>

<iframe name="attachframe" id="attachframe" style="display: none;" onload="uploadNextAttach();"></iframe>

<script type="text/javascript">
if(wysiwyg) {
newEditor(1, bbcode2html(textobj.value));
} else {
newEditor(0, textobj.value);
}
<?php if($editor['simplemode'] > 0) { ?>
editorsimple();
<?php } ?>

var ATTACHNUM = {'imageused':0,'imageunused':0,'attachused':0,'attachunused':0}, ATTACHUNUSEDAID = new Array(), IMGUNUSEDAID = new Array();
<?php if($allowpostimg) { ?>
ATTACHNUM['imageused'] = <?php echo @count($imgattachs['used']); ?>;
<?php if(!empty($imgattachs['used']) || !empty($imgattachs['unused'])) { ?>
switchImagebutton('imgattachlist');
$(editorid + '_image').evt = false;
updateattachnum('image');
<?php } else { ?>
switchImagebutton('multi');
<?php } } if($_G['group']['allowpostattach'] || $_G['group']['allowpostimage']) { ?>

ATTACHNUM['attachused'] = <?php echo @count($attachs['used']); ?>;
<?php if(!empty($attachs['used']) || !empty($attachs['unused'])) { ?>
$(editorid + '_attach').evt = false;
updateattachnum('attach');
<?php } else { ?>
switchAttachbutton('swfupload');
<?php } } if(!empty($attachs['unused'])) { ?>
display('attachnotice_attach');
var msg = '';<?php if(is_array($attachs['unused'])) foreach($attachs['unused'] as $attach) { if(!empty($attach['aid'])) { ?>
msg += '<p><label><input id="unused<?php echo $attach['aid'];?>" name="unused[]" value="<?php echo $attach['aid'];?>" checked type="checkbox" class="pc" /><span title="<?php echo $attach['filenametitle'];?> <?php echo $attach['dateline'];?>"><?php echo $attach['filename'];?></span></label></p>'
ATTACHUNUSEDAID[<?php echo $attach['aid'];?>] = '<?php echo $attach['aid'];?>';
<?php } } ?>
$('unusedlist_attach').innerHTML = '<div class="cl">' + msg + '</div>';
$('unusednum_attach').innerHTML = parseInt(<?php echo @count($attachs['unused']); ?>);
<?php } if(!empty($imgattachs['unused'])) { ?>
display('attachnotice_img');
var msg = '';<?php if(is_array($imgattachs['unused'])) foreach($imgattachs['unused'] as $attach) { if(!empty($attach['aid'])) { ?>
msg += '<p style="float:left;width:220px;"><label><input id="unused<?php echo $attach['aid'];?>" name="unused[]" value="<?php echo $attach['aid'];?>" checked type="checkbox" class="pc" /><span title="<?php echo $attach['filenametitle'];?> <?php echo $attach['dateline'];?>"><?php echo $attach['filename'];?></span></label></p>'
IMGUNUSEDAID[<?php echo $attach['aid'];?>] = '<?php echo $attach['aid'];?>';
<?php } } ?>
$('unusedlist_img').innerHTML = '<div class="cl">' + msg + '</div>';
$('unusednum_img').innerHTML = parseInt(<?php echo @count($imgattachs['unused']); ?>);
<?php } ?>
setCaretAtEnd();
if(BROWSER.ie >= 5 || BROWSER.firefox >= '2') {
_attachEvent(window, 'beforeunload', unloadAutoSave);
}
<?php if(!empty($_GET['cedit']) && $_GET['cedit'] == 'yes') { ?>
loadData(1);
$(editorid + '_switchercheck').checked = !wysiwyg;
<?php } ?>
</script>
</div>

<?php if($special || ($_G['group']['allowsetpublishdate'] && ($_GET['action'] == 'newthread' || ($_GET['action'] == 'edit' && $isfirstpost && $thread['displayorder'] == -4))) || ($_GET['action'] == 'newthread' && $_G['group']['allowpostrushreply'] && $special != 2) || ($_GET['action'] == 'edit' && getstatus($thread['status'], 3))) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($allowuploadtoday || $special == 1) { if(empty($_G['setting']['pluginhooks']['post_upload_extend'])) { if(empty($_G['uploadjs'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>upload.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php $_G['uploadjs'] = 1;?><?php } ?><script type="text/javascript">
<?php if($allowpostimg) { ?>
var imgUpload = new SWFUpload({
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=upload&fid=<?php echo $_G['fid'];?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>", "type":"image"},
file_size_limit : "<?php echo $swfconfig['max'];?>",
file_types : "<?php echo $swfconfig['imageexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['imageexts']['depict'];?>",
file_upload_limit : <?php echo $swfconfig['limit'];?>,
file_queue_limit : 0,
swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,
button_image_url : "<?php echo IMGDIR;?>/uploadbutton.png",
button_placeholder_id : "imgSpanButtonPlaceholder",
button_width: 100,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",
custom_settings : {
progressTarget : "imgUploadProgress",
uploadSource: 'forum',
uploadType: 'image',
imgBoxObj: $('imgattachlist'),
<?php if($swfconfig['maxsizeperday']) { ?>
maxSizePerDay: <?php echo $swfconfig['maxsizeperday'];?>,
<?php } if($swfconfig['maxattachnum']) { ?>
maxAttachNum: <?php echo $swfconfig['maxattachnum'];?>,
<?php } if($swfconfig['filtertype']) { ?>
filterType: <?php echo $swfconfig['filtertype'];?>,
<?php } ?>
singleUpload: $('<?php echo $editorid;?>_btn_local')
},
debug: false
});
<?php } if($_G['group']['allowpostattach']) { ?>
var upload = new SWFUpload({
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=upload&fid=<?php echo $_G['fid'];?>",
post_params: {"uid":"<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"},
file_size_limit : "<?php echo $swfconfig['max'];?>",
file_types : "<?php echo $swfconfig['attachexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['attachexts']['depict'];?>",
file_upload_limit : <?php echo $swfconfig['limit'];?>,
file_queue_limit : 0,
swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,
button_image_url : "<?php echo IMGDIR;?>/uploadbutton.png",
button_placeholder_id : "spanButtonPlaceholder",
button_width: 100,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",
custom_settings : {
progressTarget : "fsUploadProgress",
uploadSource: 'forum',
uploadType: 'attach',
<?php if($swfconfig['maxsizeperday']) { ?>
maxSizePerDay: <?php echo $swfconfig['maxsizeperday'];?>,
<?php } if($swfconfig['maxattachnum']) { ?>
maxAttachNum: <?php echo $swfconfig['maxattachnum'];?>,
<?php } if($swfconfig['filtertype']) { ?>
filterType: <?php echo $swfconfig['filtertype'];?>,
<?php } ?>
singleUpload: $('<?php echo $editorid;?>_btn_upload')
},

debug: false
});
<?php } ?>
</script>
<?php } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_upload_extend'])) echo $_G['setting']['pluginhooks']['post_upload_extend'];?>
<?php } } ?>

<script type="text/javascript">
var editorsubmit = $('postsubmit');
var editorform = $('postform');
<?php if($isfirstpost && !empty($_G['forum']['threadtypes']['types'])) { ?>
simulateSelect('typeid');
<?php } if(!$isfirstpost && $thread['special'] == 5 && empty($firststand) && $_GET['action'] != 'edit') { ?>
simulateSelect('stand');
<?php } ?>
function switchpost(href) {
editchange = false;
saveData(1);
location.href = href + '&fid=<?php echo $_G['fid'];?>&cedit=yes<?php if(!empty($_G['tid'])) { ?>&tid=<?php echo $_G['tid'];?><?php } if(!empty($modelid)) { ?>&modelid=<?php echo $modelid;?><?php } ?>&extra=<?php echo $extra;?>';
doane();
}

<?php if($_GET['action'] == 'newthread' && $_G['setting']['sitemessage']['newthread'] || $_GET['action'] == 'reply' && $_G['setting']['sitemessage']['reply']) { ?>
showPrompt('custominfo', 'mouseover', '<?php if($_GET['action'] == 'newthread') { echo trim($_G['setting']['sitemessage']['newthread'][array_rand($_G['setting']['sitemessage']['newthread'])]); } elseif($_GET['action'] == 'reply') { echo trim($_G['setting']['sitemessage']['reply'][array_rand($_G['setting']['sitemessage']['reply'])]); } ?>', <?php echo $_G['setting']['sitemessage']['time'];?>);
<?php } if($_G['group']['allowpostattach']) { ?>addAttach();<?php } if($allowpostimg) { ?>addAttach('img');<?php } ?>

(function () {
var oSubjectbox = $('subjectbox'),
oSubject = $('subject'),
oTextarea = $('e_textarea'),
sLen = 0;
if(oSubjectbox) {
if(oTextarea && oTextarea.style.display == '') {
oTextarea.focus();
}
} else if(oSubject) {
if(BROWSER.chrome) {
sLen = oSubject.value.length;
oSubject.setSelectionRange(sLen, sLen);
}
oSubject.focus();
}
})();

<?php if(empty($_GET['cedit'])) { ?>
if(loadUserdata('forum_'+discuz_uid)) {
$('rstnotice').style.display = '';
}
<?php } if(!empty($userextcredit)) { ?>
var have_replycredit = 0;
var creditstax = <?php echo $_G['setting']['creditstax'];?>;
var replycredit_result_lang = "After-tax payment<?php echo $_G['setting']['extcredits'][$extcreditstype]['title'];?> ";
var userextcredit = <?php echo $userextcredit;?>;
<?php if($thread['replycredit'] > 0) { ?>
have_replycredit = <?php echo $thread['replycredit'];?>;
<?php } } if($_GET['action'] == 'edit') { ?>
extraCheckall();
<?php } ?>
</script>
<?php if(($_GET['action'] == 'newthread' || $_GET['action'] == 'reply' || $_GET['action'] == 'edit') && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } include template('common/footer'); ?>