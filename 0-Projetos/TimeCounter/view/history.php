<?php

    include_once ROOT . "/controller/timerController.php";

    $contrl = new TimerController();

   $data = $contrl->fetchData($_SESSION["user"][0]);

?>

<table>

    <thead>

        <th>ID</th>
        <th>Name</th>
        <th>Duration</th>
        <th>Init</th>
        <th>End</th>

    </thead>

    <tbody>

        <?php if($data !== null) { foreach($data as $key => $value) {?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['name']?></td>
                <td><?=$value['duration']?></td>
                <td><?=$value['init']?></td>
                <td><?=$value['end']?></td>
            </tr>
        <?php }} ?>

    </tbody>

</table>