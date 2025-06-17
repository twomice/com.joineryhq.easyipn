<?php

require_once 'easyipn.civix.php';
// phpcs:disable
use CRM_Easyipn_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function easyipn_civicrm_config(&$config) {
  _easyipn_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function easyipn_civicrm_install() {
  _easyipn_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function easyipn_civicrm_enable() {
  _easyipn_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_links().
 */
function easyipn_civicrm_links($op, $objectName, $objectId, &$links, &$mask, &$values) {
  $myLinks = array();

  switch ($objectName) {
    case 'PaymentProcessor':
      $args = array(
        'payment_processor_id' => $objectId,
      );

      $ipn_url = CRM_Easyipn_Page_Easyipn::get_ipn_page_url($args);

      switch ($op) {
        case 'paymentProcessor.manage.action':
          // Adds a link to the main tab.
          $links[] = array(
            'name' => E::ts('Notification URL'),
            'url' => $ipn_url,
            'title' => 'Notification URL',
            'extra' => 'target="_blank"',
            'class' => 'crm-popup',
          );
          break;
      }
  }

  return $myLinks;
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function easyipn_civicrm_preProcess($formName, &$form) {
//
//}
