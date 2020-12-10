<?php
require APPPATH . '/libraries/RestController.php';
/**
 * API
 */
class Api extends RestController
{

  function __construct($config='rest')
  {
    parent::__construct($config);
  }

  public function index_get()
  {
    $info = [
      'version' => '0.1-dev',
      'app' => 'rest api omo',
      'name' => 'Kucing Kucing',
    ];
    $this->response($info, RestController::HTTP_OK);
  }
}

 ?>
