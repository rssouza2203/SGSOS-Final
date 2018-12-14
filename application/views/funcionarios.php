





<!--Area principal-->



        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url();?>home">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Funcionários</li>
          </ol>

          <!-- Botao adicionar nova solicitção -->

          <a type="button" class="btn btn-primary" href="<?php echo site_url();?>funcionario/adicionar_funcionario">Novo Funcionario <i class='fas fa-plus'></i></a>
          <br>
          <br>

          

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Funcionários</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Matricula</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                      <?php

                      foreach ($funcionario as $func)  {?>
                        <tr>
                      <td><?php echo $func['matricula'];?></td>
                     
                      <td><?php echo $func['nome'];?></td>
                       <?php $this->load->helper("tel");?>
                      <td><?php echo formata_tel($func['telefone']);?></td>
   
                      
                         <td><a class="btn btn-primary" href="<?php echo base_url();?>funcionario/visualizar_funcionario/<?php echo $func['idFuncionario'] ?>" role="button"><i class='fas fa-user-edit' style='font-size:20px'></i>Editar</i></a></td>

                        
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
