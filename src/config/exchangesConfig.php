<?php

namespace CriptoYa\config;

class exchangesConfig
{
    /**
     * configuracion de los exchange.
     *
     * @var array
     */
    public static $config = [
        'argenbtc' => [
            'name' => 'ArgenBTC',
            'coin' => ['BTC', 'DAI', 'ETH', 'USDT'],
            'fiat' => ['ARS'],
        ],
        'astropay' => [
            'name' => 'AstroPay',
            'coin' => ['BTC', 'ETH', 'USDC', 'USDT'],
            'fiat' => ['MXN', 'BRL', 'PEN', 'CLP', 'COP', 'ARS'],
        ],
        'banexcoin' => [
            'name' => 'Banexcoin',
            'coin' => ['BTC', 'USDC'],
            'fiat' => ['PEN', 'USD'],
        ],
        'belo' => [
            'name' => 'belo',
            'coin' => ['BTC', 'DAI', 'ETH', 'USDC', 'USDT'],
            'fiat' => ['ARS'],
        ],
        'binance' => [
            'name' => 'Binance',
            'coin' => ['BNB', 'BTC', 'ETH', 'USDT'],
            'fiat' => ['BRL', 'ARS'],
        ],
        'binancep2p' => [
            'name' => 'Binance P2P',
            'coin' => ['ADA', 'BNB', 'BTC', 'BUSD', 'DAI', 'DOGE', 'ETH', 'MATIC', 'SLP', 'USDT', 'XRP'],
            'fiat' => ['COP', 'ARS', 'VES', 'MXN', 'BOB', 'PEN', 'CLP', 'UYU', 'BRL', 'USD'],
        ],
        'bingxp2p' => [
            'name' => 'BingX P2P',
            'coin' => ['USDT'],
            'fiat' => ['VES', 'COP', 'ARS', 'MXN', 'BRL', 'PEN', 'CLP'],
        ],
        'bitcointoyou' => [
            'name' => 'BitcoinToYou',
            'coin' => ['AAVE', 'ADA', 'AXS', 'BAT', 'BNB', 'BTC', 'CAKE', 'DAI', 'DOGE', 'DOT', 'EOS', 'ETH', 'LINK', 'LTC', 'MANA', 'PAXG', 'SAND', 'SHIB', 'SLP', 'SOL', 'TRX', 'UNI', 'USDC', 'USDT', 'XLM', 'XRP'],
            'fiat' => ['BRL'],
        ],
        'bitcointrade' => [
            'name' => 'BitcoinTrade',
            'coin' => ['ADA', 'AVAX', 'AXS', 'BAT', 'BCH', 'BNB', 'BTC', 'BUSD', 'CAKE', 'CHZ', 'DAI', 'DOT', 'EOS', 'ETH', 'FTM', 'LINK', 'LTC', 'MANA', 'MATIC', 'PAXG', 'SAND', 'SHIB', 'SLP', 'SOL', 'UNI', 'USDC', 'USDT', 'XRP'],
            'fiat' => ['BRL'],
        ],
        'bitex' => [
            'name' => 'Bitex',
            'coin' => ['BTC', 'DAI', 'ETH', 'USDC', 'USDT'],
            'fiat' => ['CLP', 'USD', 'ARS'],
        ],
        'bitgetp2p' => [
            'name' => 'Bitget P2P',
            'coin' => ['BTC', 'DAI', 'ETH', 'USDC', 'USDT'],
            'fiat' => ['VES', 'CLP', 'COP', 'ARS', 'PEN', 'BRL', 'MXN', 'UYU'],
        ],
        'bitmonedero' => [
            'name' => 'Bitmonedero',
            'coin' => ['BTC', 'USDT'],
            'fiat' => ['ARS'],
        ],
        'bitso' => [
            'name' => 'Bitso',
            'coin' => ['AAVE', 'ADA', 'ALGO', 'AXS', 'BAT', 'BCH', 'CHZ', 'DAI', 'DOGE', 'DOT', 'FTM', 'LINK', 'LTC', 'MANA', 'MATIC', 'PAXG', 'SAND', 'SHIB', 'SOL', 'TRX', 'UNI'],
            'fiat' => ['COP', 'MXN', 'ARS', 'BRL'],
        ],
        'bitsoalpha' => [
            'name' => 'Bitso Alpha',
            'coin' => ['ADA', 'BAT', 'BCH', 'BTC', 'CHZ', 'DAI', 'DOGE', 'DOT', 'ETH', 'LINK', 'LTC', 'MANA', 'MATIC', 'SHIB', 'SOL', 'TRX', 'UNI', 'USDC', 'USDT', 'XRP'],
            'fiat' => ['BRL', 'MXN', 'COP', 'ARS', 'USD'],
        ],
        'brasilbitcoin' => [
            'name' => 'Brasil Bitcoin',
            'coin' => ['AAVE', 'ADA', 'AXS', 'BAT', 'BCH', 'BTC', 'CHZ', 'DOGE', 'ETH', 'FTM', 'LINK', 'LTC', 'MANA', 'MATIC', 'PAXG', 'SAND', 'SHIB', 'SOL', 'UNI', 'USDT', 'XRP'],
            'fiat' => ['BRL'],
        ],
        'buda' => [
            'name' => 'Buda',
            'coin' => ['BCH', 'BTC', 'ETH', 'LTC', 'USDC'],
            'fiat' => ['CLP', 'COP', 'PEN', 'ARS'],
        ],
        'buenbit' => [
            'name' => 'Buenbit',
            'coin' => ['ADA', 'AVAX', 'AXS', 'BNB', 'BTC', 'DAI', 'DOT', 'ETH', 'FTM', 'MATIC', 'NUARS', 'PAXG', 'SOL', 'USDC', 'USDT'],
            'fiat' => ['ARS', 'PEN', 'USD'],
        ],
        'bybit' => [
            'name' => 'Bybit',
            'coin' => ['ADA', 'AVAX', 'BTC', 'DAI', 'DOGE', 'DOT', 'EOS', 'ETH', 'LINK', 'MATIC', 'TRX', 'USDC', 'USDT', 'XRP'],
            'fiat' => ['ARS', 'BRL', 'MXN'],
        ],
        'bybitp2p' => [
            'name' => 'Bybit P2P',
            'coin' => ['BTC', 'ETH', 'USDC', 'USDT'],
            'fiat' => ['PEN', 'COP', 'ARS', 'VES', 'BRL', 'MXN', 'CLP'],
        ],
        'calypso' => [
            'name' => 'Calypso P2P',
            'coin' => ['BNB', 'BTC', 'ETH', 'USDT'],
            'fiat' => ['ARS', 'USD'],
        ],
        'copter' => [
            'name' => 'Copter',
            'coin' => ['BTC', 'ETH', 'USDC', 'USDT', 'XLM'],
            'fiat' => ['ARS'],
        ],
        'cryptomkt' => [
            'name' => 'CryptoMarket',
            'coin' => ['AAVE', 'ADA', 'ALGO', 'AVAX', 'BCH', 'BNB', 'BTC', 'BUSD', 'DAI', 'DOT', 'EOS', 'ETH', 'LINK', 'LTC', 'MATIC', 'PAXG', 'SHIB', 'SOL', 'TRX', 'UNI', 'USDC', 'USDT', 'XLM', 'XRP'],
            'fiat' => ['COP', 'ARS', 'PEN', 'BRL', 'CLP'],
        ],
        'decrypto' => [
            'name' => 'Decrypto',
            'coin' => ['BTC', 'DAI', 'USDT'],
            'fiat' => ['USD', 'ARS', 'PEN'],
        ],
        'domitai' => [
            'name' => 'Domitai',
            'coin' => ['BCH', 'BTC', 'ETH', 'USDT'],
            'fiat' => ['MXN'],
        ],
        'eldoradop2p' => [
            'name' => 'El Dorado P2P',
            'coin' => ['BTC', 'USDC', 'USDT'],
            'fiat' => ['PEN', 'ARS', 'VES', 'CLP', 'COP'],
        ],
        'eluter' => [
            'name' => 'Eluter',
            'coin' => ['BTC', 'CHZ', 'DOGE', 'DOT', 'ETH', 'LTC', 'PAXG', 'USDT', 'XRP'],
            'fiat' => ['ARS'],
        ],
        'fiwind' => [
            'name' => 'Fiwind',
            'coin' => ['ADA', 'BNB', 'BTC', 'BUSD', 'DAI', 'DOT', 'ETH', 'MATIC', 'SOL', 'USDC', 'USDT'],
            'fiat' => ['ARS', 'USD'],
        ],
        'flowbtc' => [
            'name' => 'FlowBTC',
            'coin' => ['BTC', 'EOS', 'ETH', 'LTC', 'XRP'],
            'fiat' => ['BRL'],
        ],
        'fluyez' => [
            'name' => 'Fluyez',
            'coin' => ['BTC'],
            'fiat' => ['USD', 'PEN'],
        ],
        'foxbit' => [
            'name' => 'Foxbit',
            'coin' => ['AAVE', 'ADA', 'AVAX', 'AXS', 'BAT', 'BTC', 'CHZ', 'DAI', 'DOGE', 'DOT', 'EOS', 'ETH', 'FTM', 'LINK', 'LTC', 'MANA', 'MATIC', 'SAND', 'SHIB', 'SLP', 'SOL', 'UNI', 'USDC', 'USDT', 'XLM', 'XRP'],
            'fiat' => ['BRL'],
        ],
        'huobip2p' => [
            'name' => 'HTX P2P',
            'coin' => ['BTC', 'ETH', 'LTC', 'USDT'],
            'fiat' => ['ARS', 'MXN', 'UYU'],
        ],
        'kriptonmarket' => [
            'name' => 'Kripton Market',
            'coin' => ['BTC', 'BUSD', 'DAI', 'ETH', 'MATIC', 'USDC', 'USDT'],
            'fiat' => ['ARS', 'COP', 'UYU'],
        ],
        'kucoinp2p' => [
            'name' => 'KuCoin P2P',
            'coin' => ['BTC', 'ETH', 'USDC', 'USDT'],
            'fiat' => ['MXN', 'ARS', 'BRL', 'COP'],
        ],
        'latamex' => [
            'name' => 'Latamex',
            'coin' => ['BTC', 'BUSD', 'DAI', 'ETH', 'LTC', 'MATIC', 'TRX', 'USDC', 'USDT'],
            'fiat' => ['ARS', 'BRL', 'MXN'],
        ],
        'lemoncash' => [
            'name' => 'Lemon Cash',
            'coin' => ['AAVE', 'ADA', 'ALGO', 'AVAX', 'AXS', 'BNB', 'BTC', 'DAI', 'DOT', 'ETH', 'FTM', 'LTC', 'MANA', 'MATIC', 'PAXG', 'SAND', 'SLP', 'SOL', 'UNI', 'USDC', 'USDT', 'XLM'],
            'fiat' => ['ARS', 'BRL'],
        ],
        'lemoncashp2p' => [
            'name' => 'Lemon Cash P2P',
            'coin' => ['USDT'],
            'fiat' => ['ARS'],
        ],
        'letsbit' => [
            'name' => 'Let&#039;sBit',
            'coin' => ['ADA', 'AVAX', 'BCH', 'BTC', 'BUSD', 'CAKE', 'DAI', 'DOGE', 'DOT', 'ETH', 'LINK', 'LTC', 'MATIC', 'NUARS', 'SOL', 'TRX', 'USDC', 'USDP', 'USDT', 'XLM', 'XRP'],
            'fiat' => ['ARS', 'COP', 'PEN', 'USD'],
        ],
        'lnp2pbotp2p' => [
            'name' => 'Lnp2pBot P2P',
            'coin' => ['BTC'],
            'fiat' => ['MXN', 'BRL', 'PEN', 'CLP', 'VES', 'COP', 'ARS'],
        ],
        'mercadobitcoin' => [
            'name' => 'Mercado Bitcoin',
            'coin' => ['AAVE', 'ADA', 'ALGO', 'AVAX', 'AXS', 'BAT', 'BCH', 'BTC', 'CHZ', 'DAI', 'DOGE', 'DOT', 'ETH', 'LINK', 'LTC', 'MANA', 'MATIC', 'PAXG', 'SAND', 'SHIB', 'SLP', 'SOL', 'UNI', 'USDC', 'USDP', 'XLM', 'XRP'],
            'fiat' => ['BRL'],
        ],
        'okexp2p' => [
            'name' => 'OKX P2P',
            'coin' => ['BTC', 'DAI', 'ETH', 'USDC', 'USDT'],
            'fiat' => ['COP', 'ARS', 'PEN', 'MXN', 'BRL', 'UYU', 'CLP', 'VES'],
        ],
        'orionx' => [
            'name' => 'Orionx',
            'coin' => ['BCH', 'BNB', 'BTC', 'DAI', 'ETH', 'LTC', 'USDT', 'XLM', 'XRP'],
            'fiat' => ['CLP'],
        ],
        'pagcripto' => [
            'name' => 'PagCripto',
            'coin' => ['BCH', 'BNB', 'BTC', 'BUSD', 'DOGE', 'ETH', 'LTC', 'MATIC', 'PAXG', 'TRX', 'USDC', 'USDP', 'USDT'],
            'fiat' => ['BRL'],
        ],
        'paxfulp2p' => [
            'name' => 'Paxful P2P',
            'coin' => ['BTC', 'USDC', 'USDT'],
            'fiat' => ['MXN', 'BRL', 'PEN', 'CLP', 'ARS', 'UYU', 'COP', 'BOB'],
        ],
        'paydecep2p' => [
            'name' => 'Paydece P2P',
            'coin' => ['USDT'],
            'fiat' => ['ARS', 'VES'],
        ],
        'pluscrypto' => [
            'name' => 'Plus Crypto',
            'coin' => ['BCH', 'BTC', 'DAI', 'ETH', 'LINK', 'LTC', 'MATIC', 'PAXG', 'UNI', 'USDC', 'USDT', 'XRP'],
            'fiat' => ['ARS'],
        ],
        'ripio' => [
            'name' => 'Ripio',
            'coin' => ['AAVE', 'ALGO', 'AVAX', 'AXS', 'BAT', 'BNB', 'BTC', 'CHZ', 'DAI', 'DOGE', 'ETH', 'LINK', 'LTC', 'MANA', 'MATIC', 'SLP', 'TRX', 'UNI', 'USDC', 'USDT', 'UXD', 'XLM'],
            'fiat' => ['ARS', 'UYU', 'BRL', 'COP', 'MXN'],
        ],
        'ripioexchange' => [
            'name' => 'Ripio Trade',
            'coin' => ['BTC', 'BUSD', 'DAI', 'ETH', 'USDC', 'USDT', 'UXD'],
            'fiat' => ['ARS', 'BRL'],
        ],
        'saldo' => [
            'name' => 'Saldo',
            'coin' => ['BTC', 'DAI', 'USDT'],
            'fiat' => ['VES', 'ARS', 'COP', 'MXN'],
        ],
        'satoshitango' => [
            'name' => 'SatoshiTango',
            'coin' => ['ADA', 'AVAX', 'BCH', 'BTC', 'DAI', 'DOGE', 'DOT', 'ETH', 'LINK', 'LTC', 'MANA', 'SOL', 'UNI', 'USDC', 'USDT', 'XLM', 'XRP'],
            'fiat' => ['PEN', 'ARS', 'BRL', 'CLP', 'USD'],
        ],
        'syklop2p' => [
            'name' => 'Syklo P2P',
            'coin' => ['USDC'],
            'fiat' => ['VES', 'MXN', 'BOB', 'PEN', 'CLP', 'UYU', 'COP', 'ARS'],
        ],
        'tiendacrypto' => [
            'name' => 'TiendaCrypto',
            'coin' => ['BNB', 'BTC', 'BUSD', 'DAI', 'ETH', 'MATIC', 'SOL', 'USDC', 'USDT'],
            'fiat' => ['ARS', 'USD'],
        ],
        'trubit' => [
            'name' => 'TruBit',
            'coin' => ['ADA', 'AVAX', 'BTC', 'DOGE', 'DOT', 'ETH', 'LTC', 'MATIC', 'SOL', 'USDC', 'USDT', 'XRP'],
            'fiat' => ['MXN', 'BRL', 'ARS'],
        ],
        'trubitp2p' => [
            'name' => 'TruBit P2P',
            'coin' => ['BTC', 'USDT'],
            'fiat' => ['ARS', 'MXN'],
        ],
        'vibrant' => [
            'name' => 'Vibrant',
            'coin' => ['USDC', 'XLM'],
            'fiat' => ['ARS'],
        ],
        'vitawallet' => [
            'name' => 'Vita Wallet',
            'coin' => ['BTC'],
            'fiat' => ['CLP', 'USD'],
        ],
        'xapo' => [
            'name' => 'Xapo Bank',
            'coin' => ['BTC', 'USDC', 'USDT'],
            'fiat' => ['USD'],
        ],
    ];

    public static function getConfig($v): array
    {
        return self::$config[$v];
    }

    public static function getAllConfig(): array
    {
        return self::$config;
    }
}
