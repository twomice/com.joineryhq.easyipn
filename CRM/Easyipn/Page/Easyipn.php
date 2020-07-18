<?php
use CRM_Easyipn_ExtensionUtil as E;

class CRM_Easyipn_Page_Easyipn extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('EasyIPN'));

    // Example: Assign a variable for use in a template
    $cms = $this->get_cms();
    $ipn_link = $this->get_ipn_link($cms);

    if(isset($_GET['payment_processor_id'])) {
      $ipn_full_link = CRM_Utils_System::url($ipn_link . $_GET['payment_processor_id'], NULL, TRUE, NULL, FALSE);
      $this->assign('ipn_link', $ipn_full_link);
    }

    parent::run();
  }

  public function get_cms() {
    $config = CRM_Core_Config::singleton();

    $cms = '';
    if ($config->userSystem->is_drupal){
      $cms = 'Drupal';
    } elseif ($config->userSystem->is_joomla) {
      $cms = 'Joomla';
    } elseif ($config->userSystem->is_joomla) {
      $cms = 'WordPress';
    }

    return $cms;
  }

  public function get_ipn_link($cms) {
    $link = array(
      'Drupal' => 'civicrm/payment/ipn/',
      'Joomla' => '?option=com_civicrm&task=civicrm/payment/ipn/',
      'WordPress' => '?page=CiviCRM&q=civicrm/payment/ipn/',
    );

    return $link[$cms];
  }

  public function get_ipn_page_url($query = NULL) {
    return CRM_Utils_System::url('civicrm/admin/setting/ipn-url', $query);
  }
}
