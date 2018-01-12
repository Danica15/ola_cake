<?php
app::uses('AppController',Controller);
/**
 *
 */
class IndexController extends AppController{
  public function index(){
    $rols = $this->Rol->find('all',['conditions'=>['Rol.estado'=>'A']]);
    $this->set('rols',$rols);
  }
}
