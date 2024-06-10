<?php

namespace App\Livewire;

use Livewire\Component;

# requiring due to dependency issues with laravel's guzzle
require_once('./../client-php-master/vendor/autoload.php');

use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\StocksaggregatesApi;
use GuzzleHttp\Client;

class Chart extends Component
{
    public array $data;
    public string $label;
 
    public function mount() 
    {
        $this->label = 'TEST';

        $config = Configuration::getDefaultConfiguration()->setApiKey('apiKey', getenv('POLYGON_API_KEY', '*')); // Replace with your actual API key

        $apiInstance = new StocksaggregatesApi(
            new Client(),
            $config
        );

        $ticker =  $this->label;
        $multiplier = 1; // 1 minute
        $timespan = 'minute';
        $from = date('Y-m-d', strtotime('-10 day'));
        $to = date('Y-m-d');
        $sort = 'asc';
        $limit = 50;
        $adjusted = true;

        $result = $apiInstance->v2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet($ticker, $multiplier, $timespan, $from, $to, $adjusted, $sort, $limit);
        $data = json_decode($result, true);

        if (isset($data['results'])) {
            foreach ($data['results'] as $candle) {
                $this->data[] = [
                    'x' => $candle['t'],
                    'o' => $candle['o'],
                    'h' => $candle['h'],
                    'l' => $candle['l'],
                    'c' => $candle['c'],
                ];
            }
        }
    }

    #[Title('Chart')]
    public function render()
    {
        return view('livewire.chart');
    }
}
