<?php if (!defined('FORUM')) die();

$recaptcha = $_POST['g-recaptcha-response'];
if(!empty($recaptcha) && !empty($forum_config['o_pan_recaptcha_priv_key']))
{
	require $ext_info['path'].'/lib/recaptchalib.php';
	$google_url="https://www.google.com/recaptcha/api/siteverify";
	$secret = $forum_config['o_pan_recaptcha_priv_key'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$url = $google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
	$res = getCurlData($url);
	$res = json_decode($res, true);

	if($res['success'])
	{
		
	}
	else
	{
		$errors[] = "The reCAPTCHA wasn't entered correctly. Go back and try it again.";
	}

}
else
{
	$errors[] = "The reCAPTCHA wasn't entered correctly. Go back and try it again.";
}

