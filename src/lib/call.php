<?php

namespace CriptoYa\lib;

class call
{
    public function exchange($exchange, $coin, $fiat, $volume = '1.0'): output
    {
        return new outputPrice([
            'ask' => 0.1,
            'totalAsk' => 0.2,
            'bid' => 0.1,
            'totalBid' => 0.2,
            'time' => 1700946750,
        ]);
    }

    public function cripto($coin, $fiat, $volume = '1.0'): array
    {
        return [
            new outputPrice([
                'ask' => 0.1,
                'totalAsk' => 0.2,
                'bid' => 0.1,
                'totalBid' => 0.2,
                'time' => 1700946750,
            ]),
        ];
    }

    public function fees(): array
    {
        return [
            'Binance P2P' => [
                'BTC' => [
                    'BITCOIN' => 0.00005,
                    'BSC' => 0.0000039,
                    'ERC20' => 0.0001,
                    'LN' => 0.000001,
                ],
            ],
        ];
    }

    public function dolar(): array
    {
        return [
            'oficial' => 373,
            'solidario' => 951.15,
            'blue' => 995,
            'ccb' => 944.32,
            'mep' => 966.3,
            'mepal30ci' => 976.84,
            'mepgd30' => 968.82,
            'mepgd30ci' => 958.85,
            'ccl' => 959.06,
            'cclal30' => 974.07,
            'cclal30ci' => 969.25,
            'cclgd30' => 995.86,
            'cclgd30ci' => 934.2,
            'blue_bid' => 945,
            'qatar' => 951.15,
            'mep_var' => -3.37,
            'ccl_var' => -0.94,
            'ccb_var' => -4.3,
            'blue_var' => -4.78,
            'mepal30' => 966.3,
            'time' => 1700966976,
        ];
    }

    public function cer(): array
    {
        return [
            'value' => 966.3,
            'time' => 1700966976,
        ];
    }

    public function uva(): array
    {
        return [
            'value' => 373,
            'time' => 1700966976,
        ];
    }

    public function bancostodos(): array
    {
        return [
            'dolariol' => new outputPrice([
                'ask' => 0.1,
                'totalAsk' => 0.2,
                'bid' => 0.1,
                'totalBid' => 0.2,
                'time' => 1700946750,
            ]),
        ];
    }
}
