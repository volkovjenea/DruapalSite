<?php

namespace Drupal\custom_block\Controller;

use Drupal\redirect\Entity\Redirect;
use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;

class CustomController extends ControllerBase {

  public function content($node, $uid) {
    $user = \Drupal\user\Entity\User::load($uid);
    $user->field_user_bookmark[] = ['target_id' => $node];

    $user->save();

    return array();
  }

  function my_goto (){
    $redirect = Drupal\redirect\Entity\Redirect::create([
      'redirect_redirect' => 'internal:/node/187',
      'language' => 'und',
      'status_code' => '301',
    ]);
    $redirect->setSource('old-page.php', array('id' => 107));
    $redirect->save();
  }
}