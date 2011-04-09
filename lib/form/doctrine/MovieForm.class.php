<?php

/**
 * Movie form.
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MovieForm extends BaseMovieForm
{
  public function configure()
  {
    $this->useFields(array(
      'title',
      'year',
      'description',
      'can_rent',
      'can_buy',
      'can_stream',
      'film_type',
      'mpaa',
      'runtime',
      'active'
    ));
    
    $this->setWidget('can_rent', new sfWidgetFormInputCheckbox());
    $this->setWidget('can_buy', new sfWidgetFormInputCheckbox());
    $this->setWidget('can_stream', new sfWidgetFormInputCheckbox());
    $this->setWidget('active', new sfWidgetFormInputCheckbox());
  }
}
