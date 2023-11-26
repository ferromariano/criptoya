<?php

namespace CriptoYa\lib;

class outputPrice
{
    /**
     * Precio de compra reportado por el exchange, sin sumar comisiones.
     *
     * @var float
     */
    public $ask;

    /**
     * Precio de compra final incluyendo las comisiones de transferencia y trade.
     *
     * @var float
     */
    public $totalAsk;

    /**
     * comisiones de transferencia y trade en compra.
     *
     * @var float
     */
    public $feesAsk;

    /**
     * Precio de venta reportado por el exchange, sin restar comisiones.
     *
     * @var float
     */
    public $bid;

    /**
     * Precio de venta final incluyendo las comisiones de transferencia y trade.
     *
     * @var float
     */
    public $totalBid;

    /**
     * comisiones de transferencia y trade en venta.
     *
     * @var float
     */
    public $feesBid;

    /**
     * Timestamp del momento en que fue actualizada esta cotización.
     *
     * @var int
     */
    public $time;

    public function __construct($d)
    {
        $this->ask = $d['ask'];
        $this->totalAsk = $d['totalAsk'];
        $this->diffAsk = $this->totalAsk - $this->ask;
        $this->bid = $d['bid'];
        $this->totalBid = $d['totalBid'];
        $this->diffBid = $this->totalBid - $this->bid;
        $this->time = $d['time'];
    }
}
