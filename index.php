
<?php
require_once 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '172180656668240', // Replace {app-id} with your app id
  'app_secret' => '39dd8bee3b38844e8683498459f26873',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/sengklekfb/upload_images/index.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>