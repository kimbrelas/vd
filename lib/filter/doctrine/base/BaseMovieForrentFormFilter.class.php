<?php

/**
 * MovieForrent filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMovieForrentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'movie_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'price'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'format'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'active'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'movie_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'price'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'format'   => new sfValidatorPass(array('required' => false)),
      'active'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('movie_forrent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MovieForrent';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'movie_id' => 'Number',
      'price'    => 'Number',
      'format'   => 'Text',
      'active'   => 'Number',
    );
  }
}
