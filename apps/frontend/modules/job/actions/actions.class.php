<?php

/**
 * job actions.
 *
 * @package    joboard
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->joboard_jobs = Doctrine_Core::getTable('JoboardJob')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->joboard_job = Doctrine_Core::getTable('JoboardJob')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->joboard_job);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JoboardJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JoboardJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($joboard_job = Doctrine_Core::getTable('JoboardJob')->find(array($request->getParameter('id'))), sprintf('Object joboard_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JoboardJobForm($joboard_job);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($joboard_job = Doctrine_Core::getTable('JoboardJob')->find(array($request->getParameter('id'))), sprintf('Object joboard_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JoboardJobForm($joboard_job);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($joboard_job = Doctrine_Core::getTable('JoboardJob')->find(array($request->getParameter('id'))), sprintf('Object joboard_job does not exist (%s).', $request->getParameter('id')));
    $joboard_job->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $joboard_job = $form->save();

      $this->redirect('job/edit?id='.$joboard_job->getId());
    }
  }
}
