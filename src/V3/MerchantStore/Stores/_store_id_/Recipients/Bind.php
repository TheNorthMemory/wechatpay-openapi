<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantStore\Stores\_store_id_\Recipients;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Bind
{
    /**
     * 绑定门店收款信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores/%7Bstore_id%7D/recipients/bind
     */
    public function post(array $options = [
        'store_id' => '20488000',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_recipient' => [[
                'mchid' => '1230000109',
                'company_name' => '腾讯科技（深圳）有限公司',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 绑定门店收款信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores/%7Bstore_id%7D/recipients/bind
     */
    public function postAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_recipient' => [[
                'mchid' => '1230000109',
                'company_name' => '腾讯科技（深圳）有限公司',
            ],],
        ],
    ]): PromiseInterface;
}
