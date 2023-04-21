<?php
include_once('../conexao.php');
include_once('../functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Áreas</title>
    <?php include_once('../head.php'); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php include_once('../menu.php'); ?>
            <div class="col-md-8">
                <h1>Gerenciamento de Áreas</h1>
                <a href="cadastrarArea.php" class="btn btn-primary">Cadastrar Nova Área</a>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $areas = buscarCampus($conexao);
                        foreach ($areas as $area) {
                            echo "<tr>";
                            echo "<td>" . $area['idArea'] . "</td>";
                            echo "<td>" . $area['nomeArea'] . "</td>";
                            echo "<td>
                                <a href='editarArea.php?idArea=" . $area['idArea'] . "' class='btn btn-warning'>Editar</a>
                                <a href='removerArea.php?idArea=" . $area['idArea'] . "' class='btn btn-danger'>Remover</a>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>