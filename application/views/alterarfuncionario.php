





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>funcionario/funcionarios">Funcionários</a>
            </li>
            <li class="breadcrumb-item active">Cadastro de Funcionário</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

<div class="card">
  <div class="card-header">
   <h5>Cadastro de Funcionário</h5>
  </div>
  <div class="card-body">
<?php
              echo validation_errors('<div class="alert alert-danger">','</div>');
              echo form_open('funcionario/alterar_login'); 

              foreach ($vfuncionario as $fun){
           ?>
<form>
  <div class="form-row">
    <div class="form-group col-md-10">
      <label >Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o nome" value="<?php echo $fun->nome ?>" >
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-4">
      <label >Matrícula</label>
      <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Digite aqui a matrícula" value="<?php echo $fun->matricula ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-4">
    <label >Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite aqui o telefone" value="<?php echo $fun->telefone ?>">
  </div>
  </div>

  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label >Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite aqui a senha" value="<?php echo $fun->senha ?>">
    </div>
    </div>
  

    <div class="form-row">
      <?php if($this->session->userdata('usuariologado')->tipo=="fa" ) {?>
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="administrador" name='administrador' >
    <label class="form-check-label" for="administrador">Administrador</label>
  </div>
<?php } ?>
    
  </div>

  <input type="hidden" name="idfuncionario" id="idfuncionario" value="<?php echo $fun->idFuncionario ?>">
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
  