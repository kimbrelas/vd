<?php

/**
 * SuggestCache filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSuggestCacheFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'   => new sfWidgetFormFilterInput(),
      'list_type' => new sfWidgetFormFilterInput(),
      'list_id'   => new sfWidgetFormFilterInput(),
      'ratio'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'list_type' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'list_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ratio'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('suggest_cache_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SuggestCache';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'user_id'   => 'Number',
      'list_type' => 'Number',
      'list_id'   => 'Number',
      'ratio'     => 'Number',
    );
  }
}
