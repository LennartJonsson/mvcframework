<?php
/**
* A form to manage content.
*
* @package MvcFrameWorkCore
*/
class CFormContent extends CForm
{

  /**
   * Properties
   */
  private $content;

  /**
   * Constructor
   */
  public function __construct($content)
  {
    parent::__construct();
    $this->content = $content;
    $save = isset($content['id']) ? 'save' : 'create';
    $this->AddElement(new CFormElementHidden('id', array('value'=>$content['id'])));
    $this->AddElement(new CFormElementText('title', array('value'=>$content['title'])));
    $this->AddElement(new CFormElementText('key', array('value'=>$content['key'])));
    $this->AddElement(new CFormElementTextarea('data', array('label'=>'Content:', 'value'=>$content['data'])));
    $this->AddElement(new CFormElementText('type', array('value'=>$content['type'])));
    $this->AddElement(new CFormElementText('filter', array('value'=>$content['filter'])));
    $this->AddElement(new CFormElementSubmit($save, array('callback'=>array($this, 'DoSave'), 'callback-args'=>array($content))));
    $this->AddElement(new CFormElementSubmit('delete', array('callback'=>array($this, 'DoDelete'), 'callback-args'=>array($content))));

    $this->SetValidation('title', array('not_empty'));
    $this->SetValidation('key', array('not_empty'));
  }
 

  /**
   * Callback to save the form content to database.
   */
  public function DoSave($form, $content)
  {
    $content['id']    = $form['id']['value'];
    $content['title'] = $form['title']['value'];
    $content['key']   = $form['key']['value'];
    $content['data']  = $form['data']['value'];
    $content['type']  = $form['type']['value'];
    $content['filter'] = $form['filter']['value'];
    return $content->Save();
  }
  
  /**
   * Callback to delete the content.
   */
  public function DoDelete($form, $content)
  {
    $content['id'] = $form['id']['value'];
    $content->Delete();
    CMvcFrameWork::Instance()->RedirectTo('content');
  }
}
