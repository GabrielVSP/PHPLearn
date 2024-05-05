<?php

    include_once ROOT . "/controller/timerController.php";

    $contrl = new TimerController();

   $data = $contrl->fetchData($_SESSION["user"][0]);

?>

<table class="w-full text-center p-5 mt-4">

    <thead>

        <th class="bg-zinc-700 text-white p-2 border border-black">ID</th>
        <th class="bg-zinc-700 text-white p-2 border border-black">Name</th>
        <th class="bg-zinc-700 text-white p-2 border border-black">Duration</th>
        <th class="bg-zinc-700 text-white p-2 border border-black">Init</th>
        <th class="bg-zinc-700 text-white p-2 border border-black">End</th>

    </thead>

    <tbody>

        <?php if($data !== null) { foreach($data as $key => $value) {?>
            <tr class="odd:bg-[#c2cd8b] bg-[#96a355]">
                <td class="border border-black"><?=$value['id']?></td>
                <td class="border border-black"><?=$value['name']?></td>
                <td class="border border-black"><?=$value['duration']?></td>
                <td class="border border-black"><?=$value['init']?></td>
                <td class="border border-black"><?=$value['end']?></td>
            </tr>
        <?php }} ?>

    </tbody>

</table>