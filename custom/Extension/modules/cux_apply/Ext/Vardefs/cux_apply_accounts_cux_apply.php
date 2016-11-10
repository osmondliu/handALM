<?php
// created: 2016-09-24 10:08:45
$dictionary["cux_apply"]["fields"]["cux_apply_accounts"] = array (
  'name' => 'cux_apply_accounts',
  'type' => 'link',
  'relationship' => 'cux_apply_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CUX_APPLY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cux_apply_accountsaccounts_ida',
);
$dictionary["cux_apply"]["fields"]["cux_apply_accounts_name"] = array (
  'name' => 'cux_apply_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUX_APPLY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'cux_apply_accountsaccounts_ida',
  'link' => 'cux_apply_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["cux_apply"]["fields"]["cux_apply_accountsaccounts_ida"] = array (
  'name' => 'cux_apply_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'cux_apply_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUX_APPLY_ACCOUNTS_FROM_CUX_APPLY_TITLE',
);
