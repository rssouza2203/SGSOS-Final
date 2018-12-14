
<html lang="pt-br">
  <head>


 

<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
    

    <title>SGSOS</title>
  </head>
 
  <body>

<h3 align="center">Relatório de Funcionários</h3>

     
                  <table >
                     
                          <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">Matrícula</th>
      <th scope="col">Telefone</th>
    </tr>
  
                     
                      <?php

                      foreach ($funcionario as $f)  {?>
                        <tr>
                      <td><?php echo $f['nome'];?></td>
                      <td><?php echo $f['matricula'];?></td>
                       <?php $this->load->helper("tel");?>
                      <td><?php echo formata_tel($f['telefone']);?></td>
                      
                    </tr>

                    <?php

                    }
                      ?>

</table>
    

  </body>
</html>





