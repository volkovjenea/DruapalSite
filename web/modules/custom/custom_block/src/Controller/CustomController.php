<?php

namespace Drupal\custom_block\Controller;

use Drupal\Core\Controller\ControllerBase;


class CustomController extends ControllerBase {

  public function content() {
    $uid = \Drupal::currentUser()->id();
    return array();

  }

}