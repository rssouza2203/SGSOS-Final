





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Solicitações</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->
          <?php if($this->session->userdata('usuariologado')->tipo=="s") {?>
          <a type="button" class="btn btn-primary" href="<?php echo site_url();?>solicitacao/adicionar_solicitacao">Nova Solicitação <i class='fas fa-plus'></i></a>
          <br>
          <br>
        <?php }?>
          

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Solicitações</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Protocolo</th>
                      <th>Data</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                      <?php

                      foreach ($solicitacao as $sol)  {?>
                        <tr>
                      <td><?php echo $sol['protocolo'];?></td>
                      <td><?php echo date("d/m/Y H:i:s", strtotime($sol['data']));?></td>

                      <td><?php
                      
switch ($sol['status'])
{
case 1:
  echo "Aguardando Análise!";
  break;
case 2:
  echo "Em Análise!";
  break;
case 3:
  echo "Em execução!";
  break;
 case 4:
  echo "Indeferida!";
  break;
case 5:
  echo "Finalizada!";
  break;

}
?>
</td> 
                      
                      
                      <td><a class="btn btn-primary" href="<?php echo base_url();?>solicitacao/visualizar_solicitacao/<?php echo $sol['idSolicitacao'] ?>" role="button"><i class='fas fa-eye'> Visualizar</i></a></td>
                    </tr>

                    <?php

                    }
                      ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Atualizado em <?php echo date('d/m/y H:i:s')  ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->







<!-- Rodape -->
