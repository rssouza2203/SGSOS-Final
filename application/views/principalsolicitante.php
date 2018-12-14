





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            
          </ol>

    



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
   ?><i class='fas fa-edit'>&nbsp;</i><?php echo  "Aguardando Análise!";
  break;
case 2:
  ?><i class='fas fa-paste'>&nbsp;</i><?php echo  "Em Análise!";
  break;
case 3:
  ?> <i class="fa fa-tags">&nbsp;<?php echo  "Em execução!";
  break;

}
?>
</td>
                    </tr>

                    <?php

                    }
                      ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Atualizado em <?php echo date('d/m/Y H:i:s')  ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->







<!-- Rodape -->
