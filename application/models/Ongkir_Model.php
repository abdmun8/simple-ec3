<?php

class Ongkir_Model extends CI_Model
{
    var $api_key;
    var $url;
    function __construct()
    {
        $this->parent::__construct();
        $this->api_key = '9053978a357cb16595600c0acb9e9fc1';
        $this->url = 'https://api.rajaongkir.com/starter/cost';
    }

    // ambil data provinsi dari database
    public function getProvince($province_id = NULL)
    {
        if ($province_id !== NULL) {
            $this->db->where('province_id', $province_id);
        }
        $query = $this->db->get('province');
        return $query->result_array();
    }

    // ambil data kota dari database
    public function getCity($city_id = NULL)
    {
        if ($city_id !== NULL) {
            $this->db->where('city_id', $city_id);
        }
        $query = $this->db->get('city');
        return $query->result_array();
    }

    // cek harga ongkir dari api raja ongkir
    public function getOngkir($origin, $destination, $weight = 1, $courier = 'jne')
    {
        $postdata = http_build_query(
            array(
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier,
            )
        );

        $opts = array(
            'http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'key'  => $this->api_key,
                'content' => $postdata
            )
        );

        $context  = stream_context_create($opts);
        $result = file_get_contents($this->url, false, $context);
        return $result;
    }
}
