<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Reservation\OutReservationNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_reservation_no_\Close $close
 */
interface _out_reservation_no_
{
    /**
     * 商户预约单号查询预约商家转账记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-reservation/transfer-reservation-get-by-out-no.html
     */
    public function get(array $options = [
        'out_reservation_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001109',
        ],
    ]): ResponseInterface;

    /**
     * 商户预约单号查询预约商家转账记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-reservation/transfer-reservation-get-by-out-no.html#async
     */
    public function getAsync(array $options = [
        'out_reservation_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001109',
        ],
    ]): PromiseInterface;
}
