<?php 

    declare(strict_types = 1);

    require ROOT . "/controller/inputController.php";

    $controller = new InputController();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Control</title>
</head>
<body>

    <main>

        <section class="display">

            <div class="in">
                <h2>Lucros</h2>
                <p>+ <?= "R$" . number_format((float)$controller->getSum('in')[0], 2, ',', '.') ?></p>
            </div>

            <div class="out">
                <h2>Perdas</h2>
                <p>- <?= "R$" . number_format((float)$controller->getSum('out')[0], 2, ',', '.') ?></p>
            </div>

            <div class="total">
                <h2>Final</h2>
                <p> <?= "R$" . number_format((float)$controller->getSum('null')[0], 2, ',', '.') ?> </p>

            </div>

        </section>

        <section class="inputs">

            <form method="post">

                <input type="text" name="desc" id="desc" placeholder="Descrição...">

                <input type="text" name="cpf" id="cpf" placeholder="CPF usado">

                <input type="number" name="value" id="value" placeholder="Valor" min="0" step="0.01">

                <select name="type" id="type">
                    <option value="in">Entrada</option>
                    <option value="out">Saída</option>
                </select>

                <input type="submit" value="Registrar" name="submit">

            </form>

        </section>

        <?php

            
            $list = $controller->fetch();

            if (isset($_POST['submit'])) {

                $type = $_POST['type'];
                $desc = $_POST['desc'];
                $cpf = $_POST['cpf'];
                $value = $_POST['value'];

                $controller->add($type, $value, $desc, $cpf); 

            }

        ?>

        <section class="list">

           <table>

            <thead>

                <tr>

                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                    <th>CPF Registrado</th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($list as $key => $value) { ?>

                    <tr>
                        <td><?= $list[$key]['descr'] ?></td>
                        <td><?= $list[$key]['value'] ?></td>
                        <td><?= $list[$key]['bType'] === 'in' ? 'Entrada' : 'Saída' ?></td>
                        <td><?= $controller->decypher($list[$key]['cpf'])?></td>
                    </tr>

                <?php } ?>

            </tbody>

           </table>

        </section>

    </main>
    
</body>
</html>