<?php 

    defined('CONTROL') or die("Acesso negado");

    $api = new ApiConsume();

    $country = $_GET['country_name'] ?? null;

    if(!$country) {

        header('Location: ?route=home');
        die();

    }

    $countryData = $api->getCountry($country)[0];

?>

<main class="country">

    <section>

        <div class="mainInfo">

            <img src="<?php echo $countryData['flags']['png'] ?>" alt="">

            <div>
                <p>Nome: <?= $countryData['name']['common']?></p>
                <p>Capital: <?= $countryData['capital'][0] ?? 'no data'?></p>
            </div>

        </div>

        <div class="border"></div>

        <div class="extraInfo">

            <p>Região: <?= $countryData['region']  ?? 'no data' ?> </p>
            <p>Sub-região: <?= $countryData['subregion']  ?? 'no data' ?></p>
            <p>População: <?= $countryData['population']  ?? 'no data' ?> habitantes</p>
            <p>Área: <?= $countryData['area']  ?? 'no data' ?> Km²</p>

        </div>

    </section>

    <div><a href="?route=home" rel="prev">Return</a></div>

</main>


