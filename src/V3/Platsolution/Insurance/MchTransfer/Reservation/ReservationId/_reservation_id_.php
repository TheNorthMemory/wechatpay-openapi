<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Insurance\MchTransfer\Reservation\ReservationId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _reservation_id_
{
    /**
     * 微信支付预约单号查询预约商家转账记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/insurance/mch-transfer/reservation/reservation-id/%7Breservation_id%7D
     */
    public function get(array $options = [
        'reservation_id' => '1330000071100999991182020050700019480001',
        'query' => [
            'sub_mchid' => '1900001109',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付预约单号查询预约商家转账记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/insurance/mch-transfer/reservation/reservation-id/%7Breservation_id%7D
     */
    public function getAsync(array $options = [
        'reservation_id' => '1330000071100999991182020050700019480001',
        'query' => [
            'sub_mchid' => '1900001109',
        ],
    ]): PromiseInterface;
}
