<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Registerdeductinfo
{
    /**
     * 登记扣款信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/register-deduct-info.html
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'channel_id' => '1230000109',
            'out_trade_no' => '1234323JKHDFE1243252',
        ],
    ]): ResponseInterface;

    /**
     * 登记扣款信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/register-deduct-info.html#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'channel_id' => '1230000109',
            'out_trade_no' => '1234323JKHDFE1243252',
        ],
    ]): PromiseInterface;
}
