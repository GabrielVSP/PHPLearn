<?php

    $api = new Api();

    if(isset($_POST['search'])) {

        $cityName = $_POST['city'];

        if ($cityName !== '') {

            $place = json_decode($api->getPlace($cityName))[0];
            $officialName = $place->name;

            if($officialName) {

                $lat = $place->latitude;
                $long = $place->longitude;

                $weather = json_decode($api->getWeather($lat, $long))->data;
                $weekWeather = $weather->weather;

                $current = [];
                $forecast = [];

                $current['icon'] = $weather->current_condition[0]->weatherIconUrl[0]->value;
                $current['temp'] = $weather->current_condition[0]->temp_C;
                $current['windSpeed'] = $weather->current_condition[0]->windspeedKmph;
                $current['weatherDesc'] = $weather->current_condition[0]->weatherDesc[0]->value;

                foreach($weekWeather as $key => $value) {

                    $day = [];

                    $day['date'] = $weekWeather[$key]->date;
                    $day['icon'] = $weekWeather[$key]->hourly[0]->weatherIconUrl[0]->value;
                    $day['weatherDesc'] = $weekWeather[$key]->hourly[0]->weatherDesc[0]->value;
                    $day['maxTemp'] = $weekWeather[$key]->maxtempC;
                    $day['minTemp'] = $weekWeather[$key]->mintempC;

                    $forecast[$key] = $day;

                }

            }

        }

    }

    /*display: grid;
    grid-template-columns: 0fr 1fr 1fr 1fr;
    align-items: center;*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <form method="post" class="d-flex justify-content-center my-5">

        <input type="text" name="city" class="w-25">
        <input type="submit" value="Procurar" name="search"  class="bg-primary text-white border-0 rounded-left-0">

    </form>

    <section class="d-flex justify-content-center">   

        <section class="w-50 text-center">

            <h2><?= $officialName ?? '' ?></h2>
            <h3>Today</h3>

            <div class="d-flex justify-content-center my-4">
                <div style="display: grid;grid-template-columns: 0fr auto 80px auto;align-items: center;" class="w-100 p-1 rounded-1 shadow-lg bg-dark text-white">
                    <?php if (isset($current)) {?>
                    <img src="<?= $current['icon'] ?>" alt="" class="rounded-circle">
                    <span><?= $current['weatherDesc'] ?> </span>
                    <span><?= $current['temp'] ?> °C</span>
                    <span><?= $current['windSpeed'] ?> km/h</span>
                    <?php }?>
                </div>
            </div>

            <h3>Forecast</h3>

            <div class="d-flex flex-column align-items-center my-4">
            <?php if (isset($forecast)) {foreach($forecast as $key => $value) {?>

                <div style="display: grid;grid-template-columns: auto auto auto auto auto;align-items: center;" class="w-100 my-2 p-1 rounded-1 shadow-lg bg-dark text-white">
                    <img src="<?= $forecast[$key]['icon'] ?>" alt="">
                    <span><?= $forecast[$key]['weatherDesc'] ?> </span>
                    <span><?= $forecast[$key]['date'] ?></span>
                    <span>Max temp: <?= $forecast[$key]['maxTemp'] ?> °C</span>   
                    <span>Min temp: <?= $forecast[$key]['minTemp'] ?> °C</span>   
                </div>

            <?php }} ?>
            </div>

        </section>

    </section>

</body>
</html>