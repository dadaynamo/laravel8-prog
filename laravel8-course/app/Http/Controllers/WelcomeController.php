<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function welcome($name = '', $lastname = '', $age = 0, Request $req ) {
          $lang = $req->lang;

          //$message='Scegli lingua in metodo GET: ?lang=';
          switch ($lang){
              case 'en':
                  $message = '<h1> Hello World ' . $name . ' ' . $lastname . ' . You are '. $age .' old</h1>'.$lang;
                  break;
              case 'es':
                  $message =  '<h1>Hola mundo: ' . $name . ' ' . $lastname . ' . Tienes '. $age .' años</h1>'.$lang;
          }
          if(isset($message)){
              return $message;
          }

    }
}
