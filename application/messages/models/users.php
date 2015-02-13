<?php defined('SYSPATH') or die('No direct script access.');

  return array
  (
     'name' => array
     (
        'not_empty' => 'El Nombre es obligatorio',
        'max_length' => 'El Nombre no puede tener mas de 60 caracteres',
     ),
     'last_name' => array
     (
        'not_empty' => 'El Apellido es obligatorio',
        'max_length' => 'El Apellido no puede tener mas de 60 caracteres',
     ),
     'email' => array
     (
        'not_empty' => 'El e-mail es obligatorio',
        'email' => 'Ingresa un e-mail valido',
        'Model_User::equals_email' => 'El e-mail ya se encuentra registrado',
        'Model_User::unique_email' => 'El e-mail ya se encuentra registrado',
     ),
     'password' => array
     (
        'not_empty' => 'La contraseña es obligatoria',
        'min_length' => 'Ingresa una contraseña de mas de 4 caracteres',
        'Model_User::equals_email' => 'El e-mail ya se encuentra registrado',
        'Model_User::unique_email' => 'El e-mail ya se encuentra registrado',
     ),
     'role' => array
     (
        'not_empty' => 'Selecciona el tipo de cuenta',
     ),
     
  );

?>
