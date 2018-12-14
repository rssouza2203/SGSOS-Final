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

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Entrar</div>
        <div class="card-body">
          <?php
              echo validation_errors('<div class="alert alert-danger">','</div>');
              echo form_open('inicial/verifica_login');
           ?>
          <form>
            <div class="form-group">
              <label for="usuario">Usuário(CPF ou Matricula)</label>
              <div class="form-label-group">
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="CPF ou Matricula" required autofocus>
                
              </div>
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <div class="form-label-group">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                
              </div>
            </div>
            <div class="form-group">
            </div>
            
            <input type="submit" value="Entrar" class="btn btn-primary btn-block">
            <?php
            echo form_close();
          ?>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo base_url();?>inicial/cadastrar">Cadastrar</a>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
