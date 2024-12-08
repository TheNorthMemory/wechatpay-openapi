<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Reservation\OutReservationNo\_out_reservation_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 关闭预约商家转账记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/reservation/out-reservation-no/%7Bout_reservation_no%7D/close
     */
    public function post(array $options = [
        'out_reservation_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001109',
        ],
    ]): ResponseInterface;

    /**
     * 关闭预约商家转账记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/reservation/out-reservation-no/%7Bout_reservation_no%7D/close
     */
    public function postAsync(array $options = [
        'out_reservation_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001109',
        ],
    ]): PromiseInterface;
}
