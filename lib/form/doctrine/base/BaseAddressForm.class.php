<?php

/**
 * Address form base class.
 *
 * @method Address getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAddressForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'user_id'      => new sfWidgetFormInputText(),
      'is_billing'   => new sfWidgetFormInputText(),
      'name_person'  => new sfWidgetFormInputText(),
      'name_company' => new sfWidgetFormInputText(),
      'address1'     => new sfWidgetFormInputText(),
      'address2'     => new sfWidgetFormInputText(),
      'city'         => new sfWidgetFormInputText(),
      'state'        => new sfWidgetFormInputText(),
      'zip'          => new sfWidgetFormInputText(),
      'phone_1'      => new sfWidgetFormInputText(),
      'phone_2'      => new sfWidgetFormInputText(),
      'phone_3'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'      => new sfValidatorInteger(array('required' => false)),
      'is_billing'   => new sfValidatorInteger(array('required' => false)),
      'name_person'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'name_company' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'address1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'address2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'city'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'state'        => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'zip'          => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'phone_1'      => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'phone_2'      => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'phone_3'      => new sfValidatorString(array('max_length' => 16, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('address[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Address';
  }

}
