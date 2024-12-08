<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\Receivers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Delete
{
    /**
     * 删除分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/receivers/delete
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
        ],
    ]): ResponseInterface;

    /**
     * 删除分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/receivers/delete
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
        ],
    ]): PromiseInterface;
}
