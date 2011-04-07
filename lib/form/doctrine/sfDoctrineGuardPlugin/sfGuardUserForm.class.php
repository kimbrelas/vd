<?php

/**
 * sfGuardUser form.
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
    $this->useFields(array(
      'first_name',
      'last_name',
      'username',
      'password',
      'is_active',
      'groups_list',
      'permissions_list'
    ));
  }
}
