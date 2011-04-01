<?php

/**
 * Log filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLogFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'action_type' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'movie_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'detailtext'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'action_type' => new sfValidatorPass(array('required' => false)),
      'user_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'movie_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'detailtext'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('log_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'action_type' => 'Text',
      'user_id'     => 'Number',
      'movie_id'    => 'Number',
      'detailtext'  => 'Text',
    );
  }
}
