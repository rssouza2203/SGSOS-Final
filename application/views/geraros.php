





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo site_url();?>oslise">Análises</a></li>
            <li class="breadcrumb-item active">Cadastro de Análises</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

<div class="card">
  <div class="card-header">
   <h5>Gerar OS</h5>
  </div>
  <div class="card-body">
<?php
           
             
    echo form_open('os/gerar_os'); 
              

                      foreach ($vos as $os)  {?>
           
<form>
<div class="form-row">
    <div class="form-group col-md-6">
      <label >Protocolo</label>
      <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite aqui o nome da rua" value="<?php echo $os->protocolo ?>" disabled="disabled">
    </div>
    <div class="form-group col-md-6">
      <label >Data/Hora</label>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite aqui o numero" value="<?php echo date("d/m/Y H:i:s", strtotime($os->data))?>" disabled="disabled">
    </div>
  </div>


  



    <div class="form-row">
    <div class="form-group col-md-10">
      <label >Nome do Funcionário</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o nome" value="<?php echo $os->nome ?>" disabled="disabled">
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-4">
      <label >Matrícula do Funcionário</label>
      <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Digite aqui a matrícula" value="<?php echo $os->matricula ?>" disabled="disabled" >
    </div>
    <div class="form-group col-md-4">
    <label >Telefone do Funcionário</label>
    <?php $this->load->helper("tel");?>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite aqui o telefone" value="<?php echo formata_tel($os->telefone) ?>" disabled="disabled">
  </div>
  </div>


  <div class="form-group">
    <label >Descrição da OS</label>
    <textarea class="form-control" id="descricaoos" name="descricaoos" rows="3"></textarea>
  </div>

<input type="hidden" name="idanalise" id="idanalise" value="<?php echo $os->idAnalise ?>">
<input type="hidden" name="idsolicitacao" id="idsolicitacao" value="<?php echo $os->idSolicitacao ?>">


<?php
           }
          

         if($this->session->userdata('usuariologado')->tipo=="f" OR $this->session->userdata('usuariologado')->tipo=="fa" ) {?>

          <div class="form-actions">
                        <div class="span12">
                         
                            <div class="span6 offset3" align="center">
                               <a class="btn btn-success" type="submit" href="<?php echo base_url();?>os/vgerar_os" data-toggle="modal" data-target="#oModal">Gerar OS</a>

                            </div>
                        </div>
                    </div>
                  
                





    <div class="modal fade" id="oModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja gerar OS?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Você deseja gerar a Ordem de Serviço dessa solicitação?</div>
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
  