<?php

    if (isset($_GET['excluir'])) {
        $idToDelete = intval($_GET['excluir']);
        Painel::delete('site_depoimentos', $idToDelete);
        Painel::redirect(INCLUDE_PATH_PAINEL."usar-depoimentos");
    }else if(isset($_GET['order']) && isset($_GET['order'])) {
        Painel::orderItem('site_depoimentos', $_GET['order'], $_GET['id']);
    }

    $curPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $perPage = 3;

    $depoimentos = Painel::selectAll('site_depoimentos', ($curPage - 1) * $perPage, $perPage);

?>

<div class="boxContent left w100">

    <h2><span class="material-symbols-outlined">chat</span> Depoimentos cadastrados</h2>

    <div class="tableWraper">
        <table>

            <thead>

                <tr>
                    <th>Nome</th>
                    <th>Conteúdo</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                    <th>#</th>
                    <th>#</th>
                </tr>

            </thead>

            <tbody>

                <?php
                    foreach ($depoimentos as $key => $value) {
                ?>

                <tr>

                    <td><?php echo $value['nome']; ?></td>
                    <td><?php echo $value['content']; ?></td>
                    <td><a href="<?php echo INCLUDE_PATH_PAINEL?>editar-depoimento?id=<?php echo $value['id']?>" class="editBtn"><span class="material-symbols-outlined">edit</span> Editar</a></td>
                    <td><a href="<?php echo INCLUDE_PATH_PAINEL?>usar-depoimentos?excluir=<?php echo $value['id']?>" class="deleteBtn"><span class="material-symbols-outlined">delete</span> Deletar</a></td>

                    <td><a href="<?php echo INCLUDE_PATH_PAINEL?>usar-depoimentos?order=up&id=<?php echo $value['id']?>"><span class="material-symbols-outlined shadow" >arrow_upward</span></a></td>
                    <td><a href="<?php echo INCLUDE_PATH_PAINEL?>usar-depoimentos?order=down&id=<?php echo $value['id']?>"><span class="material-symbols-outlined shadow" >arrow_downward</span></a></td>

                </tr>

                <?php } ?>

            </tbody>

        </table>
    </div>
    <div class="depoiButtons">

        <?php
            $totalPages = ceil(count(Painel::selectAll('site_depoimentos')) / $perPage);
           
            for($i = 0; $i < $totalPages; $i++) {
                if($i + 1 == $curPage) {

                    echo '<a href="'.INCLUDE_PATH_PAINEL.'usar-depoimentos?page='.($i+1).'" class="depoiPage selected">'.($i + 1).'</a>';

                }
                else {

                    echo '<a href="'.INCLUDE_PATH_PAINEL.'usar-depoimentos?page='.($i+1).'" class="depoiPage">'.($i + 1).'</a>';

                }
            }

        ?>
    </div>

</div>