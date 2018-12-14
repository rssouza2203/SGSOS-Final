
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

<h3 align="center">Relatorio de Os</h3>

     
                  <table >
                     
                          <tr>
      
      <th scope="col">Solicitação</th>
      <th scope="col">Funcionário</th>
      <th scope="col">Protocolo</th>
      <th scope="col">Data</th>
    </tr>
  
                     
                      <?php

                      foreach ($os as $o)  {?>
                        <tr>
                      <td><?php echo $o->protocolo;?></td>
                      <td><?php echo $o->matricula;?></td>
                      <td><?php echo $o->protocoloOS;?></td>
                      <td><?php echo date("d/m/Y H:i:s", strtotime($o->dataOS));?></td>

                     
                    </tr>

                    <?php

                    }
                      ?>

</table>
    

  </body>
</html>





