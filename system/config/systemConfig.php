<?php

$config = array
(
  'site' => array(
    'parent' => '../../',
    'path' => 'http://'.$_SERVER['HTTP_HOST'].str_replace('index.php','',$_SERVER['PHP_SELF']),
    'url' => 'https://cover.unlink.men/',
    'name'  => '社群封面產生器',
    'title' => '社群封面產生器',
    'description' => '康熙字典體於此，就是要你知道：天下萬萬字體，朕賜給你的，才是你的，朕不給，你自己來想辦法。',
    'copyright' => 'just for fun',
    'shortcut-icon' => 'https://cover.unlink.men/images/favicon.ico',
    'apple-touch-icon' => ''
  ),
  'setting' => array(
    'enable-database' => false,
    'enable-navbar-search' => false,
    'enable-member-system' => false
  ),
  'member' => array(
    'default-page' => 'member'
  ),
  'database' => array(
    'host'  => 'localhost',
    'user'  => 'root',
    'pass'  => 'root',
    'db'  => ''
  ),
  'admin' => array(
    '000000000000000'
  ),
  'google' => array(
    'analytics-id'  => 'UA-00000000-0'
  ),
  'facebook' => array(
    'fanpage' => '',
    'app-id' => '',
    'app-secret' => '',
    'privacy-policy' => ''
  ),
  'og' => array(
    'title' => '社群封面產生器',
    'type'  => 'website',
    'url' => 'https://cover.unlink.men/',
    'image' => 'https://cover.unlink.men/images/fb.png?banana',
    'sitename'  => '社群封面產生器',
    'description' => '康熙字典體於此，就是要你知道：天下萬萬字體，朕賜給你的，才是你的，朕不給，你自己來想辦法。'
  )
);

?>
