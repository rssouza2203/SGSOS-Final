
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

<h3 align="center">Relatório de Solicitantes</h3>

     
                  <table >
                     
                          <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Email</th>
    </tr>
  
                     
                      <?php

                      foreach ($solicitante as $s)  {?>
                        <tr>
                      <td><?php echo $s['nome'];?></td>
                      <td><?php echo $s['cpf'];?></td>
                      <td><?php echo $s['email'];?></td>
                      
                    </tr>

                    <?php

                    }
                      ?>

</table>
    

  </body>
</html>





