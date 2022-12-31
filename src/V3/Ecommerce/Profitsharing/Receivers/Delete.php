<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Profitsharing\Receivers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Delete
{
    /**
     * 删除分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_8.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'type' => 'MERCHANT_ID',
            'account' => '190001001',
        ],
    ]): ResponseInterface;

    /**
     * 删除分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_8.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'type' => 'MERCHANT_ID',
            'account' => '190001001',
        ],
    ]): PromiseInterface;
}
