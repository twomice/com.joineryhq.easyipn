<?php
use CRM_Easyipn_ExtensionUtil as E;

class CRM_Easyipn_Page_Easyipn extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('EasyIPN'));

    if (isset($_GET['payment_processor_id'])) {
      $ipn_full_link = CRM_Utils_System::url('civicrm/payment/ipn/' . $_GET['payment_processor_id'], NULL, TRUE, NULL, FALSE, TRUE);
      $this->assign('ipn_link', $ipn_full_link);
    }

    parent::run();
  }

  public function get_ipn_page_url($query = NULL) {
    return CRM_Utils_System::url('civicrm/admin/setting/ipn-url', $query);
  }

}
