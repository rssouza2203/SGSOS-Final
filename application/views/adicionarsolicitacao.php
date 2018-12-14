





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo site_url();?>solicitacao">Solicitações</a></li>
            <li class="breadcrumb-item active">Cadastro de Solicitações</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

<div class="card">
  <div class="card-header">
   <h5>Cadastro de Solicitação</h5>
  </div>
  <div class="card-body">
<?php
              echo validation_errors('<div class="alert alert-danger">','</div>');
              echo form_open('solicitacao/inserir_solicitacao'); 
           ?>
<form>
  <div class="form-row">
    <div class="form-group col-md-10">
      <label >Rua</label>
      <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite aqui o nome da rua">
    </div>
    <div class="form-group col-md-2">
      <label >Numero</label>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite aqui o numero">
    </div>
  </div>
  <div class="form-group">
    <label >Complemento</label>
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite o complemento">
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label >Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
    </div>
    <div class="form-group col-md-4">
      <label >CEP</label>
      <input type="text" class="form-control" id="cep" name="cep">
    </div>
  </div>
 <div class="form-row">
    <div class="form-group col-md-10">
      <label >Tipo Solicitação</label>
      <select name="tiposolicitacao" class="custom-select">
  <option selected>Selecione uma opção</option>
  <option value="1">Capina</option>
  <option value="2">Coleta de Lixo</option>
  <option value="3">Retirada de Entulho</option>
  <option value="4">Troca de Lâmpada(Poste) </option>
  <option value="5">Esgoto</option>
  <option value="6">Outros</option>
</select>
    </div>
</div>

<div class="form-group">
    <label >Descrição da Solicitação</label>
    <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
  </div>





                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" align="center">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>

                               <a href="<?php echo base_url() ?>solicitacao" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
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
  