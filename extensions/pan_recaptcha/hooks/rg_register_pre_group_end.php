<?php if (!defined('FORUM')) die();
if(!empty($forum_config['o_pan_recaptcha_pub_key']))
{
?>
				<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
					<div class="sf-box text required">
						<label for="fld<?php echo ++$forum_page['fld_count'] ?>"><span>reCAPTCHA</span> <small></small></label><br />
						<span class="fld-input">
							<div class="g-recaptcha" data-sitekey="<?php echo $forum_config['o_pan_recaptcha_pub_key'] ?>"></div>
							</span>
					</div>
				</div>
				<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
					<div class="sf-box select">
						<label for="fld<?php echo ++$forum_page['fld_count'] ?>"><span></span> <small></small></label><br />
						<span class="fld-input"></span></span>
					</div>
				</div>
<?php
}
