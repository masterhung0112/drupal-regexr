<?php

namespace Drupal\regexr\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render\RendererInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class RegexrController extends ControllerBase {
  
  /**
   * The renderer
   *
   * @var \Drupal\Core\Render\RendererInterface 
   */
  protected $renderer;
  

  public function __construct(RendererInterface $renderer) {
    $this->renderer = $renderer;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('renderer')
    );
  }
  
  /**
   * @return array
   *  A render array representing the listing of content
   */
  public function index() {
    $ra = [
      '#type' => 'page', 
      '#theme' => 'regexr_index',
      '#markup' => 'hello world!',
    ];
    #return new Response($this->renderer->render($ra, TRUE));
    return $ra;
  }
}
