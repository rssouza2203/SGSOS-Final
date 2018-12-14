<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SGSOS</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo site_url();?>funcionario">SGSOS</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>


      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-99">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw" style='font-size:24px'></i> <?php echo $this->session->userdata('usuario')->nome; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <?php if($this->session->userdata('usuariologado')->tipo=="f" OR $this->session->userdata('usuariologado')->tipo=="fa" ) {?>
            <a class="dropdown-item" href="<?php echo base_url();?>funcionario/visualizar_funcionario/<?php echo $this->session->userdata('usuario')->idFuncionario  ?>">Cadastro</a>
          <?php }else{ ?>
            <a class="dropdown-item" href="<?php echo base_url();?>solicitante/visualizar_solicitante/<?php echo $this->session->userdata('usuario')->idSolicitante  ?>">Cadastro</a>
 <?php } ?>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url();?>home/logout" data-toggle="modal" data-target="#logoutModal">Sair</a>
          </div>
        </li>
      </ul>

    </nav>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Você deseja sair do sistema?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="<?php echo site_url();?>/home/logout">Sair</a>
          </div>
        </div>
      </div>
    </div>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url();?>home">
            <i class='fas fa-home' ></i>
            <span>Início</span>
          </a>
        </li>
        
          
        <?php if($this->session->userdata('usuariologado')->tipo=="f" OR $this->session->userdata('usuariologado')->tipo=="fa" ) {?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             
            <i class="fa fa-users"></i>
            <span>Cadastro</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <?php if($this->session->userdata('usuariologado')->tipo=="fa") {?>
            <a class="dropdown-item" href="<?php echo site_url();?>funcionario/funcionarios">Funcionário</a>
             <?php  }?>
            <a class="dropdown-item" href="<?php echo site_url();?>solicitante/solicitantes">Solicitante</a>
          </div>
        </li>
    
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Relatórios</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Cadastros:</h6>
            <a class="dropdown-item" href="<?php echo site_url();?>solicitante/gerar_relatorio">Solicitantes</a>
            <a class="dropdown-item" href="<?php echo site_url();?>funcionario/gerar_relatorio">Funcionários</a>
            <a class="dropdown-item" href="<?php echo site_url();?>solicitacao/relatorio_solicitacoes">Solicitações</a>
            
            <a class="dropdown-item" href="<?php echo site_url();?>os/relatorio_oss">Ordem de Serviço</a>
            <!-- Sidebar
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Outros:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a> -->
          </div>
        </li>
    
    <?php if($this->session->userdata('usuariologado')->tipo=="f" OR $this->session->userdata('usuariologado')->tipo=="fa" ) {?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>solicitacao/listar_solicitacoes_func">
            <i class='fas fa-edit'></i>
            <span>Solicitações</span></a>
        </li>

         <?php  } else {?>

          <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>solicitacao/busca_solicitacoes/<?php echo $this->session->userdata('usuario')->idSolicitante; ?>">
            <i class='fas fa-edit'></i>
            <span>Solicitações</span></a>


          <?php  }?>


        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>analise">
            <i class='fas fa-paste'></i>
            <span> Análises</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>os">
            <i class="fa fa-tags"></i>
            <span> Ordens de Serviços</span></a>
        </li>

              <?php  }?>


        <?php if($this->session->userdata('usuariologado')->tipo=="s") {?>

          <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>solicitacao/busca_solicitacoes/<?php echo $this->session->userdata('usuario')->idSolicitante; ?>">
            <i class='fas fa-edit'></i>
            <span>Solicitações</span></a>
        </li>
        <?php  }?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>home/ajuda">
            <i class='fas fa-question-circle'></i>
            <span> Ajuda</span></a>
        </li>
    
      </ul>
      <div id="content-wrapper">