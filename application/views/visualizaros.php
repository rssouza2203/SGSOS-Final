





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo site_url();?>os">Ordem de Serviços</a></li>
            <li class="breadcrumb-item active">Visualização de OS</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

<div class="card">
  <div class="card-header">
   <h5>Ordem de Serviços</h5>
  </div>
  <div class="card-body">
<?php
             

 foreach ($vos as $osv)  {?>
           
<form>

<?php if ($osv->status == '5') { ?>

<div class="alert alert-success" role="alert" align="center">
 <b> OS Finalizada!</b>
</div>

<?php } ?>

<div class="form-row">
    <div class="form-group col-md-6">
      <label >Protocolo</label>
      <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite aqui o nome da rua" value="<?php echo $osv->protocolo ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-6">
      <label >Data/Hora</label>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite aqui o numero" value="<?php echo date("d/m/Y H:i:s", strtotime($osv->data))?>" disabled="disabled">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-10">
      <label >Rua</label>
      <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite aqui o nome da rua" value="<?php echo $osv->rua ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-2">
      <label >Numero</label>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite aqui o numero" value="<?php echo $osv->numero ?>" disabled="disabled">
    </div>
  </div>
  <div class="form-group">
    <label >Complemento</label>
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite o complemento" value="<?php echo $osv->complemento ?>" disabled="disabled">
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label >Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro" value="<?php echo $osv->bairro ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-4">
      <label >CEP</label>
      <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $osv->cep ?>" disabled="disabled">
    </div>
  </div>
 <div class="form-row">
    <div class="form-group col-md-10">
      <label >Tipo Solicitação</label>

<input type="text" class="form-control" id="cep" name="cep" value="<?php switch ($osv->tipoSolicitacao)
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
    <textarea class="form-control" id="descricao" name="descricao" rows="3" disabled="disabled"><?php echo $osv->descricao ?></textarea>
  </div>



    <div class="form-row">
    <div class="form-group col-md-10">
      <label >Nome do Funcionário</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o nome" value="<?php echo $osv->nome ?>" disabled="disabled">
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-4">
      <label >Matrícula do Funcionário</label>
      <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Digite aqui a matrícula" value="<?php echo $osv->matricula ?>" disabled="disabled" >
    </div>
    <div class="form-group col-md-4">
    <label >Telefone do Funcionário</label>
    <?php $this->load->helper("tel");?>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite aqui o telefone" value="<?php echo formata_tel($osv->telefone) ?>" disabled="disabled">
  </div>
  </div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label >Protocolo OS</label>
      <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite aqui o nome da rua" value="<?php echo $osv->protocoloOS ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-6">
      <label >Data/Hora OS</label>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite aqui o numero" value="<?php echo date("d/m/Y H:i:s", strtotime($osv->dataOS))?>" disabled="disabled">
    </div>
  </div>

  <div class="form-group">
    <label >Descrição da OS</label>
    <textarea class="form-control" id="descricao" name="descricao" rows="3" disabled="disabled"><?php echo $osv->descricaoOS ?></textarea>
  </div>

  <?php
        if ($osv->status != '5') {
         
        

  ?>

     <div class="form-actions">
            <div class="span12">
                         
                <div class="span6 offset3" align="center">
                               
                  <a class="btn btn-success" type="submit"  data-toggle="modal" data-target="#osModal">Finalisar OS</a>
                </div>
            </div>
      </div>

      <?php
        }
  ?>


  </div>
  </div>
        



            <div class="modal fade" id="osModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Finalizar OS?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Você deseja finalizar essa OS?</div>
          <div class="modal-footer">
            <a class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</a>
            <a class="btn btn-success" type="submit" href="<?php echo base_url();?>os/finalizar_os/<?php echo $osv->idSolicitacao ?>">Finalizar</a>
          </div>
        </div>
      </div>
    </div>
    
     <?php } ?>          
    </form>

          
   </div>
</div> 
 <br>

        </div>
        <!-- /.container-fluid -->







<!-- Rodape -->
  