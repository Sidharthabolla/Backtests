<?php

class Controller{          
          function __construct(){
                    if(isset($_GET['action'])){
                              $this->action = $_GET['action'];
                    } else {
                              $this->action = 'view';
                    }
                    $this->view = new View();
          }


          public function control1(){
                    switch($this->action){
                              case "view":
                                        $this->view->render('index');
                                        break;
                              case "sparkline":
                                        require 'core/models/sparkline_model.php';
                                        $sparkline = new sparkline_model();
                                        $sparkline -> get_arrays();
                                        $this->view->render('sparkline',$sparkline);
                                        break;
                              case "super_imposed":
                                        require 'core/models/super_imposed_model.php';
                                        $super_imposed = new super_imposed_model();
                                        $super_imposed -> get_arrays();
                                        $this->view->render('super_imposed',$super_imposed);
                                        break;
                              default:
                                        $this->view->error();
                                        break;
                    }
          } 

}
