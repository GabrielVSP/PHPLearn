<?php 

    defined('CONTROL') or die("Acesso negado");

    $api = new ApiConsume();
    
    $countries = $api->getAll();

?>

<main class="home">

    <section>

        <h2>Países</h2>

        <div class="flex">

            <select name="countries" id="countries">

                <option value="" default>Selecione um país</option>

                <?php foreach($countries as $country) { ?>
                    <option value="<?= $country ?>"><?= $country ?></option>
                <?php } ?>

            </select>

        </div>

    </section>

</main>

<script>

    document.addEventListener('DOMContentLoaded', () => {

        const select = document.querySelector('#countries')

        select.addEventListener('change', (e) => {
            
            const country = e.target.value
            location.href = `?route=country&country_name=${country}`

        })

    })

</script>
