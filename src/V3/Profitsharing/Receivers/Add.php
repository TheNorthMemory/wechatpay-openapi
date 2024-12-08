<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\Receivers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Add
{
    /**
     * 添加分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/receivers/add
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
            'name' => 'hu89ohu89ohu89o',
            'relation_type' => 'SERVICE_PROVIDER',
            'custom_relation' => '代理商',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 添加分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/receivers/add
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
            'name' => 'hu89ohu89ohu89o',
            'relation_type' => 'SERVICE_PROVIDER',
            'custom_relation' => '代理商',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
