<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Profitsharing\Receivers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Add
{
    /**
     * 添加分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/receivers/add
     */
    public function post(array $options = [
        'json' => [
            'brand_mchid' => '1900000108',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '1900000109',
            'name' => '张三网络公司',
            'relation_type' => 'SUPPLIER',
        ],
    ]): ResponseInterface;

    /**
     * 添加分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/receivers/add
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_mchid' => '1900000108',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '1900000109',
            'name' => '张三网络公司',
            'relation_type' => 'SUPPLIER',
        ],
    ]): PromiseInterface;
}
