<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\ProfitSharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Orders\Unfreeze $unfreeze
 * @property-read Orders\_out_order_no_ $_out_order_no_
 */
interface Orders
{
    /**
     * 请求分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/profit-sharing/orders
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'currency' => 'CNY',
                'type' => 'MERCHANT_ID',
                'account' => '86693852',
                'name' => 'hu89ohu89ohu89o',
                'authorized' => true,
                'amount' => 888,
                'description' => '分给商户A',
            ],],
            'unfreeze_unsplit' => true,
        ],
    ]): ResponseInterface;

    /**
     * 请求分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/profit-sharing/orders
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'currency' => 'CNY',
                'type' => 'MERCHANT_ID',
                'account' => '86693852',
                'name' => 'hu89ohu89ohu89o',
                'authorized' => true,
                'amount' => 888,
                'description' => '分给商户A',
            ],],
            'unfreeze_unsplit' => true,
        ],
    ]): PromiseInterface;
}
