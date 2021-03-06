<?php

/**
 * Credit form base class.
 *
 * @method Credit getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCreditForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'movies_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Movie')),
      'people_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Person')),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'movies_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Movie', 'required' => false)),
      'people_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Person', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('credit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Credit';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['movies_list']))
    {
      $this->setDefault('movies_list', $this->object->Movies->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['people_list']))
    {
      $this->setDefault('people_list', $this->object->People->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveMoviesList($con);
    $this->savePeopleList($con);

    parent::doSave($con);
  }

  public function saveMoviesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['movies_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Movies->getPrimaryKeys();
    $values = $this->getValue('movies_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Movies', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Movies', array_values($link));
    }
  }

  public function savePeopleList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['people_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->People->getPrimaryKeys();
    $values = $this->getValue('people_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('People', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('People', array_values($link));
    }
  }

}
