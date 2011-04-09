<?php

/**
 * Person filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'first_name'   => new sfWidgetFormFilterInput(),
      'last_name'    => new sfWidgetFormFilterInput(),
      'credits_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Credit')),
      'movies_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Movie')),
    ));

    $this->setValidators(array(
      'first_name'   => new sfValidatorPass(array('required' => false)),
      'last_name'    => new sfValidatorPass(array('required' => false)),
      'credits_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Credit', 'required' => false)),
      'movies_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Movie', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addCreditsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.movieCreditPerson movieCreditPerson')
      ->andWhereIn('movieCreditPerson.credit_id', $values)
    ;
  }

  public function addMoviesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.movieCreditPerson movieCreditPerson')
      ->andWhereIn('movieCreditPerson.movie_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Person';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'first_name'   => 'Text',
      'last_name'    => 'Text',
      'credits_list' => 'ManyKey',
      'movies_list'  => 'ManyKey',
    );
  }
}
