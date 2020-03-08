<?php

class Ongkir_Model extends CI_Model
{
    var $api_key;
    var $url;
    var $origin;
    var $weight;
    function __construct()
    {
        $this->api_key = '9053978a357cb16595600c0acb9e9fc1';
        $this->url = 'https://api.rajaongkir.com/starter/cost';
        $this->origin = 171; //karawang
        $this->weight = 30000; //berat rata2
    }

    // cek harga ongkir dari api raja ongkir
    public function getOngkir($destination, $courier = 'jne')
    {
        $curl = curl_init();

        $postdata = http_build_query(
            array(
                'origin' => $this->origin,
                'destination' => $destination,
                'weight' => $this->weight,
                'courier' => $courier,
            )
        );

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postdata,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: {$this->api_key}"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
