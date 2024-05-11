<?php
     $url = 'dados.json';
     // Define a URL do arquivo JSON
      
     $json = file_get_contents($url);
     // Obtém o conteúdo do arquivo JSON como uma string
      
      
     $data = json_decode($json, true);
     // Decodifica a string JSON em um array associativo do PHP e o resultado é armazenado na variável $data


   
             
     foreach ($data as $aluno) {
        foreach ($aluno['disciplinas'] as $disciplina) {
            echo '<tr>';
            echo '<td>'.$aluno['nome'].'</td>';
            echo '<td>'.$aluno['turma'].'</td>';
            echo '<td>'.$disciplina['nome'].'</td>';
            echo '<td>'.$disciplina['professor'].'</td>';
            echo '</tr>';
        }
    }
    .
        
    

?>


