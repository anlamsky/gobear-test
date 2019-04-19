<?php

namespace Drupal\gobear_jobs\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Getlistjobs.
   *
   * @return string
   *   Return Hello string.
   */
  public function getListJobs() {
    $data_list = 'https://jobs.github.com/positions.json?location=new+york';
    $data_list = json_decode(file_get_contents($data_list));
    $result = [];
    foreach ($data_list as $k => $item) {
      $result[$k]['id'] =  $item->id;
      $result[$k]['title'] =  $item->title;
      $result[$k]['company'] =  $item->company;
      $result[$k]['location'] =  $item->location;
      $result[$k]['type'] =  $item->type;
      $result[$k]['created_at'] =  $item->created_at;
      $result[$k]['description'] =  $item->description;
    }
    return [
      '#theme' => 'gobear_jobs',
      '#content' => $result
    ];
  }
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): $name'),
    ];
  }

}
