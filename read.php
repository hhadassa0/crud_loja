<?php
     include "conexao.php";
     $select = "SELECT * FROM lojinha ";
     $resultado = $conn->query($select);
     
?>
<a href="index.php"<>  voltar</a>
<br>
<br>
    <table border="1">
          <thead>
               <th>ID</th><th>produto</th><th>preco</th><th>acao</th>

          </thead>
          <tbody>
               <?php 
                    if($resultado->num_rows > 0){
                          while($produto=$resultado->fetch_object()){
                         echo "<tr>";
                              echo "<td>".$produto->id."</td>";
                              echo "<td>".$produto->produto."</td>";
                              echo "<td>".$produto->preco."</td>";
                              
                              
                         echo "<td>";
                              echo "<a href= 'delet.php?id=$produto->id'>deletar</a>";
                              echo "<a href= 'update2.php?id=$produto->id'>editar</a>";

                         echo "</td>";
                    }
                         echo "</td>";
               }else{
                    echo"<tr><td>nenhum dado encontrado</td><tr>";
                }
               ?>

          </tbody>

<a href="index.php">< voltar</a>



    </table> 


