





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
   <h5>Solicitação</h5>
  </div>
  <div class="card-body">
<?php
           
             
    echo form_open('analise/gerar_analise'); 
              

                      foreach ($vsolicitacao as $sol)  {?>
           
<form>
<div class="form-row">
    <div class="form-group col-md-6">
      <label >Protocolo</label>
      <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite aqui o nome da rua" value="<?php echo $sol->protocolo ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-6">
      <label >Data/Hora</label>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite aqui o numero" value="<?php echo date("d/m/Y H:i:s", strtotime($sol->data))?>" disabled="disabled">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-10">
      <label >Rua</label>
      <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite aqui o nome da rua" value="<?php echo $sol->rua ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-2">
      <label >Numero</label>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite aqui o numero" value="<?php echo $sol->numero ?>" disabled="disabled">
    </div>
  </div>
  <div class="form-group">
    <label >Complemento</label>
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite o complemento" value="<?php echo $sol->complemento ?>" disabled="disabled">
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label >Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro" value="<?php echo $sol->bairro ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-4">
      <label >CEP</label>
      <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $sol->cep ?>" disabled="disabled">
    </div>
  </div>
 <div class="form-row">
    <div class="form-group col-md-10">
      <label >Tipo Solicitação</label>

<input type="text" class="form-control" id="cep" name="cep" value="<?php switch ($sol->tipoSolicitacao)
{
case 1:

  echo "Capina";
  break;
case 2:
  echo "Coleta de Lixo";
  break;
case 3:
  echo "Retirada de Entulho";
  break;
  case 4:
  echo "Troca de Lâmpada(Poste)";
  break;
  case 5:
  echo "Esgoto";
  break;
  case 6:
  echo "Outros";
  break;

} ?>" disabled="disabled">

    </div>
</div>

<div class="form-group">
    <label >Descrição da Solicitação</label>
    <textarea class="form-control" id="descricao" name="descricao" rows="3" disabled="disabled"><?php echo $sol->descricao ?></textarea>
  </div>

<input type="hidden" name="idsolicitacao" id="idsolicitacao" value="<?php echo $sol->idSolicitacao ?>">

<?php
           }
          

         if($this->session->userdata('usuariologado')->tipo=="f" OR $this->session->userdata('usuariologado')->tipo=="fa" ) {?>

          <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" align="center">
                              <a class="btn btn-success" type="submit" href="<?php echo base_url();?>analise/gerar_analise" data-toggle="modal" data-target="#aModal">Análisar</a>

                               <a href="<?php echo base_url() ?>solicitacao" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                  
                





    <div class="modal fade" id="aModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realizar análise?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Você deseja análisar essa solicitação?</div>
          <div class="modal-footer">
            <a class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</a>
            <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Sim</button>
          </div>
        </div>
      </div>
    </div>
           <?php
         }
            echo form_close();
          ?>
  </form>
          
   </div>
</div> 
 <br>

        </div>
        <!-- /.container-fluid -->







<!-- Rodape -->
  