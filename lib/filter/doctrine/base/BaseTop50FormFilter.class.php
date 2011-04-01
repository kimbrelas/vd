<?php

/**
 * Top50 filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTop50FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'movie_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_position' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'movie_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_position' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('top50_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Top50';
  }

  public function getFields()
  {
    return array(
      'movie_id'      => 'Number',
      'position'      => 'Number',
      'last_position' => 'Number',
    );
  }
}
