<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="bm bmw fl<?php if($_G['forum']['forumcolumns']) { ?> flg<?php } ?>">
<div class="bm_h cl">
<span class="o"><img id="subforum_<?php echo $_G['forum']['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $collapseimg['subforum'];?>" title="Collapse / Expand" alt="Collapse / Expand" onclick="toggle_collapse('subforum_<?php echo $_G['forum']['fid'];?>');" /></span>
<h2>Sub-forum</h2>
</div>

<div id="subforum_<?php echo $_G['forum']['fid'];?>" class="bm_c" style="<?php echo $collapse['subforum'];?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php if(is_array($sublist)) foreach($sublist as $sub) { $forumurl = !empty($sub['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$sub['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$sub['fid'];?><?php if($_G['forum']['forumcolumns']) { if($sub['orderid'] && ($sub['orderid'] % $_G['forum']['forumcolumns'] == 0)) { ?>
</tr>
<?php if($_G['forum']['orderid'] < $_G['forum']['forumcolumns']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g" width="<?php echo $_G['forum']['forumcolwidth'];?>">
<div class="fl_icn_g"<?php if(!empty($sub['extra']['iconwidth']) && !empty($sub['icon'])) { ?> style="width: <?php echo $sub['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($sub['icon']) { ?>
<?php echo $sub['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($sub['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($sub['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $sub['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($sub['extra']['iconwidth']) && !empty($sub['icon'])) { ?> style="margin-left: <?php echo $sub['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>" <?php if(!empty($sub['redirect'])) { ?>target="_blank"<?php } ?> style="<?php if(!empty($sub['extra']['namecolor'])) { ?>color: <?php echo $sub['extra']['namecolor'];?>;<?php } ?>"><?php echo $sub['name'];?></a><?php if($sub['todayposts'] && !$sub['redirect']) { ?><em class="xw0 xi1" title="Today"> (<?php echo $sub['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($sub['redirect'])) { ?><dd><em>Theme: <?php echo dnumber($sub['threads']); ?></em>, <em> Posts: <?php echo dnumber($sub['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($sub['permission'] == 1) { ?>
Private forum
<?php } else { if($sub['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">Linked to the external address</a>
<?php } elseif(is_array($sub['lastpost'])) { if($_G['forum']['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $sub['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($sub['lastpost']['subject'], 30); ?></a> <cite><?php echo $sub['lastpost']['dateline'];?> <?php if($sub['lastpost']['author']) { ?><?php echo $sub['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $sub['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">Last Post: <?php echo $sub['lastpost']['dateline'];?></a>
<?php } } else { ?>
Never
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_subforum_extra'][$sub[fid]])) echo $_G['setting']['pluginhooks']['forumdisplay_subforum_extra'][$sub[fid]];?>
</dd>
</dl>
</td>
<?php } else { ?>
<td class="fl_icn" <?php if(!empty($sub['extra']['iconwidth']) && !empty($sub['icon'])) { ?> style="width: <?php echo $sub['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($sub['icon']) { ?>
<?php echo $sub['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($sub['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($sub['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $sub['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>" <?php if(!empty($sub['redirect'])) { ?>target="_blank"<?php } ?> style="<?php if(!empty($sub['extra']['namecolor'])) { ?>color: <?php echo $sub['extra']['namecolor'];?>;<?php } ?>"><?php echo $sub['name'];?></a><?php if($sub['todayposts'] && !$sub['redirect']) { ?><em class="xw0 xi1" title="Today"> (<?php echo $sub['todayposts'];?>)</em><?php } ?></h2>
<?php if($sub['description']) { ?><p class="xg2"><?php echo $sub['description'];?></p><?php } if($sub['subforums']) { ?><p>Sub-forum: <?php echo $sub['subforums'];?></p><?php } if($sub['moderators']) { ?><p>Moderator: <?php echo $sub['moderators'];?></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_subforum_extra'][$sub[fid]])) echo $_G['setting']['pluginhooks']['forumdisplay_subforum_extra'][$sub[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($sub['redirect'])) { ?><span class="xi2"><?php echo dnumber($sub['threads']); ?></span><span class="xg1"> / <?php echo dnumber($sub['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($sub['permission'] == 1) { ?>
Private forum
<?php } else { if($sub['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">Linked to the external address</a>
<?php } elseif(is_array($sub['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $sub['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($sub['lastpost']['subject'], 30); ?></a> <cite><?php echo $sub['lastpost']['dateline'];?> <?php if($sub['lastpost']['author']) { ?><?php echo $sub['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
Never
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">
<?php } } ?>
<?php echo $_G['forum']['endrows'];?>
</tr>
</table>
</div>
</div>