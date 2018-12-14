





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item">
              <a >Relatórios</a>
            </li>
            
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

<div class="card">
  <div class="card-header">
   <h5>Relatorio de OS</h5>
  </div>
  <div class="card-body">
<?php
echo form_open('os/gerar_relatorio'); 
           ?>
<form>
  <div class="form-row">
      <div class="form-group col-md-4">
      <label >Gerado de:</label>
      <input type="date" class="form-control" id="datainicial" name="datainicial" required="required" >
    </div>
    <div class="form-group col-md-4">
    <label >até:</label>
    <input type="date" class="form-control" id="datafinal" name="datafinal" required="required">
  </div>
  </div>

    
  </div>




                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" align="center">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Imprimir</button>
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
  

