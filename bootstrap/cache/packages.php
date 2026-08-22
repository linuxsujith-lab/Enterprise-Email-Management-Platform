<?php return array (
  'acelle/cashier' => 
  array (
    'providers' => 
    array (
      0 => 'Acelle\\Cashier\\CashierServiceProvider',
    ),
  ),
  'chumper/zipper' => 
  array (
    'providers' => 
    array (
      0 => 'Chumper\\Zipper\\ZipperServiceProvider',
    ),
    'aliases' => 
    array (
      'Zipper' => 'Chumper\\Zipper\\Zipper',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'mews/purifier' => 
  array (
    'providers' => 
    array (
      0 => 'Mews\\Purifier\\PurifierServiceProvider',
    ),
    'aliases' => 
    array (
      'Purifier' => 'Mews\\Purifier\\Facades\\Purifier',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
);