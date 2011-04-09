<?php

/**
 * Movie filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMovieFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'year'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'    => new sfWidgetFormFilterInput(),
      'can_rent'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'can_buy'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'can_stream'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rating_average' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rating_count'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'film_type'      => new sfWidgetFormFilterInput(),
      'mpaa'           => new sfWidgetFormFilterInput(),
      'runtime'        => new sfWidgetFormFilterInput(),
      'active'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'date_added'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'credits_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Credit')),
      'people_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Person')),
    ));

    $this->setValidators(array(
      'title'          => new sfValidatorPass(array('required' => false)),
      'year'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'    => new sfValidatorPass(array('required' => false)),
      'can_rent'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'can_buy'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'can_stream'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rating_average' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rating_count'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'film_type'      => new sfValidatorPass(array('required' => false)),
      'mpaa'           => new sfValidatorPass(array('required' => false)),
      'runtime'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'active'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'date_added'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'credits_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Credit', 'required' => false)),
      'people_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Person', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('movie_filters[%s]');

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

  public function addPeopleListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('movieCreditPerson.person_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Movie';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'title'          => 'Text',
      'year'           => 'Number',
      'description'    => 'Text',
      'can_rent'       => 'Number',
      'can_buy'        => 'Number',
      'can_stream'     => 'Number',
      'rating_average' => 'Number',
      'rating_count'   => 'Number',
      'film_type'      => 'Text',
      'mpaa'           => 'Text',
      'runtime'        => 'Number',
      'active'         => 'Number',
      'date_added'     => 'Date',
      'credits_list'   => 'ManyKey',
      'people_list'    => 'ManyKey',
    );
  }
}
