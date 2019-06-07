<?php

require_once 'models/pedido.php';

class pedidoController{

  public function index(){
    if (isset($_SESSION['login'])) {
    $id_usuario = $_SESSION['login']->id;
    $pedido = new Pedido();
    $pedido->setId($id_usuario);
    $pedidos = $pedido->getAddress();
    $chequear = $pedido->chekAddress();
      if ($chequear) {
        $_SESSION['direccion']= "existe";
      }else{
        $_SESSION['direccion']="no existe";
      }      
    }
    require_once 'views/pedido/index.php';
  }

  public function confirmar(){

    if(isset($_SESSION['login'])){

			$id_usuario = $_SESSION['login']->id;
      $stats = Utils::statsCarrito();
			$total = $stats['total'];

      $pedido = new Pedido();
      $pedido->setId_usuario($id_usuario);
      $pedido->setComuna($_POST['comuna']);
      $pedido->setCalle($_POST['calle']);
      $pedido->setNumero_calle($_POST['numero']);
      $pedido->setNumero_casa_apto($_POST['casa_apto']);
      $pedido->setTotal($total);

      $save = $pedido->save();
      if ($save) {
        $_SESSION['register']= "complete";
      }else {
        $_SESSION['register']= "failed";
      }
    }else{
      $_SESSION['register']= "failed";
    }
    header("Location:".base_url);
  }

  public function add(){

    require_once 'views/pedido/index.php';
  		}
  	}


?>
