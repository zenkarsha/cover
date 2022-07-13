<?php

class imageController extends View
{
  var $model;
  function __construct ()
  {
    include './system/controller/partial/__construct.php';
  }
}
class ajax extends imageController
{
  function __construct()
  {
    parent::__construct();

    include './system/class/createImage.php';

    //post attribute
    @$template1 = $_POST['template1'];
    @$template2 = $_POST['template2'];
    @$template3 = $_POST['template3'];
    @$something = $_POST['something'];
    @$verb = $_POST['verb'];
    @$other = $_POST['other'];
    @$colorbg = $_POST['colorbg'];
    @$color1 = $_POST['color1'];
    @$color2 = $_POST['color2'];
    @$sentence = $_POST['sentence'];
    @$directpost = 2;

    //create object
    $obj = new createImage();
    $obj -> Create($template1, $template2, $template3, $something, $verb, $other, $colorbg, $color1, $color2, $sentence, $directpost);
  }
}
class generate extends imageController
{
  function __construct()
  {
    parent::__construct();

    include './system/class/createImage.php';

    //create image
    @$template1=$_POST['template1'];
    @$template2=$_POST['template2'];
    @$template3=$_POST['template3'];
    @$something=$_POST['something'];
    @$verb=$_POST['verb'];
    @$other=$_POST['other'];
    @$colorbg = $_POST['colorbg'];
    @$color1 = $_POST['color1'];
    @$color2 = $_POST['color2'];
    @$sentence = $_POST['sentence'];
    @$directpost = $_POST['directpost'];

    //create object
    $obj = new createImage();
    $obj -> Create($template1, $template2, $template3, $something, $verb, $other, $colorbg, $color1, $color2, $sentence, $directpost);
  }
}
class facebookpost extends imageController
{
  function __construct()
  {
    parent::__construct();
    if(isset($_GET['photo'])) {
      $photo = "./temp/".$_GET['photo'].".png";
      if(file_exists($photo)) {
        require_once('./system/extension/php-sdk/facebook.php');

        $config = array(
        'appId' => '',
        'secret' => '',
        'fileUpload' => true,
        );

        $facebook = new Facebook($config);
        $user_id = $facebook->getUser();

        if($user_id) {
          try {
            $ret_obj = $facebook->api('/'.$user_id.'/photos', 'POST', array('source' => '@' . $photo));
            $url="https://www.facebook.com/".$user_id."?preview_cover=".$ret_obj['id'];
            header("Location: $url");
          } catch(FacebookApiException $e) {
          $login_url = $facebook->getLoginUrl( array('scope' => 'user_photos,photo_upload'));
            error_log($e->getType());
            error_log($e->getMessage());
            header("Location: $login_url");
          }
        } else {
          $login_url = $facebook->getLoginUrl( array( 'scope' => 'user_photos,photo_upload') );
          header("Location: $login_url");
        }
      } else {
        $url = $this->config['site']['path'];
        header("Location: $url");
      }
    } else {
      $url = $this->config['site']['path'];
      header("Location: $url");
    }
  }
}
class optionchanger extends imageController
{
  function __construct()
  {
    parent::__construct();

    if(isset($_GET['option'])) $option = $_GET['option'];
    else $option = 1;

    ob_start();
    include './system/view/partial/sentence/'.$option.'.html';
    $string = ob_get_clean();
    echo $string;
  }
}
