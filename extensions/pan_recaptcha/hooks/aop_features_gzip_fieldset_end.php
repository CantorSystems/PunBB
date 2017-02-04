<?php if (!defined('FORUM')) die();

?>
			<div class="content-head">
				<h2 class="hn"><span>reCAPTCHA Options</span></h2>
			</div>

			<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
				<div class="sf-box text">
					<label for="fld<?php echo ++$forum_page['fld_count'] ?>">
						<span>Public key</span><small></small>
					</label><br />
					<span class="fld-input"><input type="text" id="fld<?php echo $forum_page['fld_count'] ?>" name="form[pan_recaptcha_pub_key]" size="50" value="<?php echo forum_htmlencode($forum_config['o_pan_recaptcha_pub_key']) ?>" placeholder="Enter heer your public key" /></span>
				</div>
			</div>
			
			<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
				<div class="sf-box text">
					<label for="fld<?php echo ++$forum_page['fld_count'] ?>">
						<span>Private key</span><small>I do not have a key. <a href="https://www.google.com/recaptcha/admin#list" target="_blank">What should I do?</a></small>
					</label><br />
					<span class="fld-input"><input type="text" id="fld<?php echo $forum_page['fld_count'] ?>" name="form[pan_recaptcha_priv_key]" size="50" value="<?php echo forum_htmlencode($forum_config['o_pan_recaptcha_priv_key']) ?>" placeholder="Enter heer your private key" /></span>
				</div>
			</div>
<?php

