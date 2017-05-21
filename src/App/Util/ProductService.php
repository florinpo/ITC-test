<?php
/**
 * User: florinpo
 * Date: 20/05/2017
 * Time: 14:48
 */

namespace App\Util;

use RestClient as RestClient;

class ProductService
{
    protected $client;

    //config should be used from a container config
    public static $config = array(
        'service_url' => 'https://www.itccompliance.co.uk/recruitment-webservice/api/',
        'headers' => ''
    );

    public function createClient()
    {
        $this->client = $api = new RestClient([
            'base_url' => self::$config['service_url'],
            //'format' => "json",;
            // https://dev.twitter.com/docs/auth/application-only-auth
            //'headers' => ['Authorization' => 'Bearer '.OAUTH_BEARER],
        ]);
    }

    public function getList()
    {
        $result = $this->client->get("list");
        $response = array();
        $response['error'] = '';
        $response['result'] = null;

        if ($result->info->http_code == 200) {
            $result = $result->decode_response();

            if (property_exists($result, "error")) {
                $response['error'] = $result->error;
            } else {
                $response['result'] = $result->products;
            }

        } else {
            $response['error'] = 'There was an error with the service, please try again later.';
        }

        return $response;
    }

    public function getItem($id)
    {
        $result = $this->client->get("info", ['id' => $id]);
        $response = array();
        $response['error'] = '';
        $response['result'] = null;

        if ($result->info->http_code == 200) {
            $result = $result->decode_response();

            if (property_exists($result, "error")) {
                $response['error'] = $result->error;
            } else {
                $response['result'] = $result->$id;
            }

        } else {
            $response['error'] = 'There was an error with the service, please try again later.';
        }

        return $response;
    }
}
