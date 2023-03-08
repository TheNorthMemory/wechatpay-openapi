<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank\Serviceorder;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Deduction
{
    /**
     * 查询扣款信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/get-acquiring-bank-deduct-info.html
     */
    public function get(array $options = [
        'query' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => '',
            'sub_mchid' => '1900000109',
            'sub_appid' => '',
            'channel_id' => '1230000109',
            'out_order_no' => '1234323JKHDFE1243252',
        ],
    ]): ResponseInterface;

    /**
     * 查询扣款信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/get-acquiring-bank-deduct-info.html#async
     */
    public function getAsync(array $options = [
        'query' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => '',
            'sub_mchid' => '1900000109',
            'sub_appid' => '',
            'channel_id' => '1230000109',
            'out_order_no' => '1234323JKHDFE1243252',
        ],
    ]): PromiseInterface;
}
