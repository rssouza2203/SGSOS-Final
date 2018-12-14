





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Análises</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          

          

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Análises</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Data</th>
                      <th>Protocolo Solicitação</th>
                      <th>Funcionário Responsável</th>
                      <th></th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                      <?php

                      foreach ($analise as $an)  {?>
                        <tr>
                      <td><?php echo date("d/m/Y H:i:s", strtotime($an['dataAnalise']));?></td>
                      <td><?php echo $an['protocolo'];?></td>
                      <td><?php echo $an['nome'];?></td>
                      <td><a class="btn btn-primary" href="<?php echo base_url();?>analise/visualizar_analise/<?php echo $an['idAnalise'] ?>" role="button"><i class='fas fa-eye'>Visualizar</i></a></td>
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
