<?php if(count(get_included_files()) ==1) die(); //Direct Access Not Permitted ?>
<?php
global $settings, $us_url_root;
if($settings->session_manager==1) {?><p><a class="btn btn-primary btn-block" href="<?=$us_url_root?>users/manage_sessions" role="button"><?=lang("ACCT_SESS")?></a></p><?php } ?>
