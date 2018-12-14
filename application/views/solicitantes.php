





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Solicitantes</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Solicitantes</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>CPF</th>
                      <th>Nome</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                      <?php

                      foreach ($solicitante as $sol)  {?>
                        <tr>
                      <td><?php echo $sol['cpf'];?></td>
                      <td><?php echo $sol['nome'];?></td>
                      <td><?php echo $sol['email'];?></td>
   
                      
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
