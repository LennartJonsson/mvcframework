<?php
/**
 * A form for editing the user profile.
 *
 * @package MvcFrameWorkCore
 */
class CFormUserProfile extends CForm
{

  /**
   * Constructor
   */
  public function __construct($object, $user)
  {
    parent::__construct();
    $this->AddElement(new CFormElementText('acronym', array('readonly'=>true, 'value'=>$user['acronym'])));
    $this->AddElement(new CFormElementPassword('password'));
    $this->AddElement(new CFormElementPassword('password1', array('label'=>'Password again:')));
    $this->AddElement(new CFormElementSubmit('change_password', array('callback'=>array($object, 'DoChangePassword'))));
    $this->AddElement(new CFormElementText('name', array('value'=>$user['name'], 'required'=>true)));
    $this->AddElement(new CFormElementText('email', array('value'=>$user['email'], 'required'=>true)));
    $this->AddElement(new CFormElementSubmit('save', array('callback'=>array($object, 'DoProfileSave'))));

    $this->SetValidation('name', array('not_empty'));
    $this->SetValidation('email', array('not_empty'));
  }
}
