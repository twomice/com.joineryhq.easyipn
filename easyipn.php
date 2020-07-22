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
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function easyipn_civicrm_xmlMenu(&$files) {
  _easyipn_civix_civicrm_xmlMenu($files);
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
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function easyipn_civicrm_postInstall() {
  _easyipn_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function easyipn_civicrm_uninstall() {
  _easyipn_civix_civicrm_uninstall();
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
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function easyipn_civicrm_disable() {
  _easyipn_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function easyipn_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _easyipn_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function easyipn_civicrm_managed(&$entities) {
  _easyipn_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function easyipn_civicrm_caseTypes(&$caseTypes) {
  _easyipn_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function easyipn_civicrm_angularModules(&$angularModules) {
  _easyipn_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function easyipn_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _easyipn_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function easyipn_civicrm_entityTypes(&$entityTypes) {
  _easyipn_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function easyipn_civicrm_themes(&$themes) {
  _easyipn_civix_civicrm_themes($themes);
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
            'name' => ts('Notification URL'),
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
