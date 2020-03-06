<html> 
      <head> 
            <title>Chess-Board</title>
      </head>
      <body> 
            <table border="1px">
                  <?php
                        $n = 4;
                        for($i=0;$i<$n;$i++){
                              echo "<tr>";
                        for($j=0;$j<$n;$j++){
                              $total=$i+$j;
                              if($total%2==0){
                                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                              }
                              else{
                              echo "<td height=30px width=30px bgcolor=#000000></td>";
                              }
                        }
                        echo "</tr>";
                        }
                  ?>
            </table>
      </body>
</html>