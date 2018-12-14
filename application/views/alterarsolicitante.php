





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>solicitante">Solicitante</a>
            </li>
            <li class="breadcrumb-item active">Cadastro de Solicitante</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

<div class="card">
  <div class="card-header">
   <h5>Cadastro de Solicitante</h5>
  </div>
  <div class="card-body">
<?php
              echo validation_errors('<div class="alert alert-danger">','</div>');
              echo form_open('solicitante/alterar_login'); 

              foreach ($vsolicitante as $fun){
           ?>
<form>
  <div class="form-row">
    <div class="form-group col-md-10">
      <label >Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o nome" value="<?php echo $fun->nome ?>" >
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-2">
      <label >CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite aqui  CPF" value="<?php echo $fun->cpf ?>" disabled="disabled" >
    </div>
    <div class="form-group col-md-8">
    <label >Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Digite aqui o email" value="<?php echo $fun->email ?>" disabled="disabled">
  </div>
  </div>

  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label >Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite aqui a senha" value="<?php echo $fun->senha ?>">
    </div>
    </div>
  

  <input type="hidden" name="idsolicitante" id="idsolicitante" value="<?php echo $fun->idSolicitante ?>">
  <input type="hidden" name="idlogin" id="idlogin" value="<?php echo $fun->idLogin ?>">

<?php
            }
          ?>


                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" align="center">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Alterar</button>

                                </div>
                        </div>
                    </div>
                    <?php
            echo form_close();
          ?>
                </form>
          
   </div>
</div> 
 <br>

        </div>
        <!-- /.container-fluid -->







<!-- Rodape -->
  