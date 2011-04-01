<?php

/**
 * Address filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAddressFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_billing'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_person'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_company' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address1'     => new sfWidgetFormFilterInput(),
      'address2'     => new sfWidgetFormFilterInput(),
      'city'         => new sfWidgetFormFilterInput(),
      'state'        => new sfWidgetFormFilterInput(),
      'zip'          => new sfWidgetFormFilterInput(),
      'phone_1'      => new sfWidgetFormFilterInput(),
      'phone_2'      => new sfWidgetFormFilterInput(),
      'phone_3'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_billing'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name_person'  => new sfValidatorPass(array('required' => false)),
      'name_company' => new sfValidatorPass(array('required' => false)),
      'address1'     => new sfValidatorPass(array('required' => false)),
      'address2'     => new sfValidatorPass(array('required' => false)),
      'city'         => new sfValidatorPass(array('required' => false)),
      'state'        => new sfValidatorPass(array('required' => false)),
      'zip'          => new sfValidatorPass(array('required' => false)),
      'phone_1'      => new sfValidatorPass(array('required' => false)),
      'phone_2'      => new sfValidatorPass(array('required' => false)),
      'phone_3'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('address_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Address';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'user_id'      => 'Number',
      'is_billing'   => 'Number',
      'name_person'  => 'Text',
      'name_company' => 'Text',
      'address1'     => 'Text',
      'address2'     => 'Text',
      'city'         => 'Text',
      'state'        => 'Text',
      'zip'          => 'Text',
      'phone_1'      => 'Text',
      'phone_2'      => 'Text',
      'phone_3'      => 'Text',
    );
  }
}
