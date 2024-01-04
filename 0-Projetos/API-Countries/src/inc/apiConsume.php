<?php

class ApiConsume
{

    private function api($endpoint, $method = 'GET', $postfields = []) {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://restcountries.com/v3.1/$endpoint",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            die(0);
        } else {
            return json_decode($response, true);
        }

    }

    public function getAll() {

        $results = $this->api('all');
        $countries = [];

        foreach($results as $key) {

            $countries[] = $key['name']['common'];

        }

        sort($countries);
        return $countries;

    }

    public function getCountry($name) {

        $name = str_replace(' ', '%20', $name);

        return $this->api('name/' . $name);

    }

}
