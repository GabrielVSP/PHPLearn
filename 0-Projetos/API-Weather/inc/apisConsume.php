<?php

    class Api {

        public function getPlace($name) {

            $client = new GuzzleHttp\Client();

            $res = $client->get("https://api.api-ninjas.com/v1/geocoding?city=$name", [
                'headers' => [
                    'X-Api-Key' => 'J6QrFQcALZLo/GMnnJPUIg==YxWLBRmfc1i6LeYo',
                    'Content-Type' => 'application/json; charset="utf-8"',
                ]
            ]);

            return $res->getBody();

        }

        public function getWeather($lat, $long) {

            $client = new GuzzleHttp\Client();

            $res = $client->get("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=f437717bbf944c5f8d8193308230412&q=$lat, $long&format=json&num_of_days=5", [
                'headers' => [
                    'Content-Type' => 'application/json; charset="utf-8"',
                ]
            ]);

            return $res->getBody();

        }

    }