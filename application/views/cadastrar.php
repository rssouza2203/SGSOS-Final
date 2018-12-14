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
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastro</div>
        <div class="card-body">
          <?php
              echo validation_errors('<div class="alert alert-danger">','</div>');
              echo form_open('inicial/inserir_login');
           ?>
          <form>

            <div class="form-group">
              <label for="firstName">Nome</label>
              <div class="form-label-group">
                
                <input type="text" id="nome" name="nome" placeholder="Nome" class="form-control" required autofocus>
                    
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <div class="form-label-group">
                
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                 <div class="col-md-6">
                   <label for="lastCpf">CPF</label>
                  <div class="form-label-group">
                    
                    <input type="text" id="cpf" name="cpf" placeholder="CPF" class="form-control" required>
                   
                  </div>
                </div>
                <div class="col-md-6">
                   <label for="inputPassword">Senha</label>
                  <div class="form-label-group">
                   
                    <input type="password" id="senha" name="senha" placeholder="Senha" class="form-control" required>
                    
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary btn-block">
            
            <?php
            echo form_close();
            
          ?>
          <a class="btn btn-secondary btn-block" href="<?php echo base_url();?>inicial">Voltar</a>
          </form>
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
