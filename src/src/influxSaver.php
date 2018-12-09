<?php
declare(strict_types=1);

class InfluxSaver implements DataSaver
{
    public function save(string $query)
    {
        $curl = curl_init();
        $q =  curl_escape($curl ,$query);
        $url = "curl -i -XPOST 'http://localhost:8086/write?db=database' --data-binary ".$q;

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url ,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        curl_exec($curl);
        curl_close($curl);
    }

    public function generateQuery(array $params)
    {
        return 'date=01.01.2018 weight=56.5 trained=1 '.time();
    }

    public function loadConfig(string $path)
    {
        return true;
    }
}
