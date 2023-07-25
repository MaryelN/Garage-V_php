<?php

define('_SERVICE_IMG_PATH_', 'assets/images/');
define('_ICON_PATH_', 'assets/icons/svg/');

$serviceCards = [
  ['icon' => 'garage', 
  'image' => 'Card1',
  'title' => "Maintenance préventive"],
  ['icon' => 'engine', 
  'image' => 'Card2',
  'title' => "Réparations courantes"],
  ['icon' => 'chain', 
  'image' => 'Card3',
  'title' => "Réparation de la transmission"],
  ['icon' => 'electric', 
  'image' => 'Card4',
  'title' => "Diagnostic électrique"],
];

$openHours = [
  ['day' =>'Lundi', 'am' => '09:00-12:00', 'pm' => '14:00-18:00'],
  ['day' =>'Mardi', 'am' => '09:00-12:00', 'pm' => '14:00-18:00'],
  ['day' =>'Mercredi', 'am' => '09:00-12:00', 'pm' => '14:00-18:00'],
  ['day' =>'Jeudi', 'am' => '09:00-12:00', 'pm' => '14:00-18:00'],
  ['day' =>'Vendredi', 'am' => '09:00-12:00', 'pm' => '14:00-18:00'],
  ['day' =>'Samedi', 'am' => '09:00-12:00', 'pm' => '']
];

$mainMenu = [
  'index.php' => 'Accueil',
  'services.php' => 'Services',
  'catalogue.php' => ' Vente de Voitures',
  'contact.php' => ' Contact'
];