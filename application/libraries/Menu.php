<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Menu {
          private $arr_menu;
          public function __construct($arr)
          {
            # code...
            $this->arr_menu=$arr;
          }
          public function construirMenu()
          {
            # code...
            $ret_menu = "<nav> <ul>";
            foreach ($this->arr_menu as $opcion) {
              # code...
              $ret_menu .="<li>".$opcion."</li>";
            }
            $ret_menu .= "</ul></nav>";
            return $ret_menu;
          }
}
?>
