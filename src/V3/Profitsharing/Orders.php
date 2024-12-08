<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Orders\_out_order_no_ $_out_order_no_
 * @property-read Orders\Unfreeze $unfreeze
 */
interface Orders
{
    /**
     * 请求分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/orders
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'type' => 'MERCHANT_ID',
                'account' => '86693852',
                'name' => 'hu89ohu89ohu89o',
                'amount' => 888,
                'description' => '分给商户A',
            ],],
            'unfreeze_unsplit' => true,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 请求分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/orders
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'type' => 'MERCHANT_ID',
                'account' => '86693852',
                'name' => 'hu89ohu89ohu89o',
                'amount' => 888,
                'description' => '分给商户A',
            ],],
            'unfreeze_unsplit' => true,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
