<?php require_once("../controllers/list.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Usuarios</title>
</head>
<body>
    <div class="container">
        <h3>Lista de usuários cadastrados</h3>
        <?php if(count($users) != 0){?>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Tipo do usuário</th>
                    <th>Nome de usuário</th>
                </tr>

                <?php 
                    for($i=0; $i<count($users);$i++){
                        print "<tr>";
                        print "<td>$i<td>";
                        print "<td>".$users[$i]->getNome()."<td>"; 
                        print "<td>".$users[$i]->getSenha()."<td>"; 
                        print "<td>". $users[$i]->getEndereco()."<td>"; 
                        print "<td>".$users[$i]->getCpf()."<td>"; 
                        print "<td>". $users[$i]->getTipoUsuario()."<td>"; 
                        print "<td>". $users[$i]->getNomeUsuario() ."<td>"; 
                        print "</tr>";
                    }
                ?>
            </table>
        <?php } ?>
    </div>
    
</body>
</html>  