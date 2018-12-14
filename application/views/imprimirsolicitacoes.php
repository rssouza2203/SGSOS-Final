
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

<h3 align="center">Relatorio de Solicitações</h3>

     
                  <table >
                     
                          <tr>
      
      <th scope="col">Protocolo</th>
      <th scope="col">Data</th>
      <th scope="col">Status</th>
    </tr>
  
                     
                      <?php

                      foreach ($solicitacao as $sol)  {?>
                        <tr>
                      <td><?php echo $sol->protocolo;?></td>
                      <td><?php echo date("d/m/Y H:i:s", strtotime($sol->data));?></td>

                      <td><?php
                      
switch ($sol->status)
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
                    </tr>

                    <?php

                    }
                      ?>

</table>
    

  </body>
</html>





