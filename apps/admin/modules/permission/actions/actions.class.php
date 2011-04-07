<?php

class permissionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_guard_permissions = $this->getRoute()->getObjects();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sfGuardPermissionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new sfGuardPermissionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new sfGuardPermissionForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new sfGuardPermissionForm($this->getRoute()->getObject());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->getRoute()->getObject()->delete();

    $this->redirect($this->generateUrl('permission'));
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $permission = $form->save();

      $this->redirect($this->generateUrl('permission'));
    }
  }
}
