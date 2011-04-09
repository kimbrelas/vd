<?php

/**
 * Person form base class.
 *
 * @method Person getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'first_name'   => new sfWidgetFormInputText(),
      'last_name'    => new sfWidgetFormInputText(),
      'credits_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Credit')),
      'movies_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Movie')),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'first_name'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'last_name'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'credits_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Credit', 'required' => false)),
      'movies_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Movie', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['credits_list']))
    {
      $this->setDefault('credits_list', $this->object->Credits->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['movies_list']))
    {
      $this->setDefault('movies_list', $this->object->Movies->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveCreditsList($con);
    $this->saveMoviesList($con);

    parent::doSave($con);
  }

  public function saveCreditsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['credits_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Credits->getPrimaryKeys();
    $values = $this->getValue('credits_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Credits', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Credits', array_values($link));
    }
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

}
