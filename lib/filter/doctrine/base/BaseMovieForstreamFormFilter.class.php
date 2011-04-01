<?php

/**
 * MovieForstream filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMovieForstreamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'movie_id'        => new sfWidgetFormFilterInput(),
      'bucket_name'     => new sfWidgetFormFilterInput(),
      'domain_name'     => new sfWidgetFormFilterInput(),
      'distribution_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'movie_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bucket_name'     => new sfValidatorPass(array('required' => false)),
      'domain_name'     => new sfValidatorPass(array('required' => false)),
      'distribution_id' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('movie_forstream_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MovieForstream';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'movie_id'        => 'Number',
      'bucket_name'     => 'Text',
      'domain_name'     => 'Text',
      'distribution_id' => 'Text',
    );
  }
}
