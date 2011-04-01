<?php

/**
 * InstantHistory filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInstantHistoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'seektime'   => new sfWidgetFormFilterInput(),
      'did_finish' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'seektime'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'did_finish' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('instant_history_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InstantHistory';
  }

  public function getFields()
  {
    return array(
      'user_id'    => 'Number',
      'movie_id'   => 'Number',
      'seektime'   => 'Number',
      'did_finish' => 'Number',
    );
  }
}
