<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\Store\Brandstores\_store_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Bindrecipient
{
    /**
     * 绑定收款商户号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D/bindrecipient
     */
    public function post(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
            'mchid' => '1230000109',
            'company_name' => '腾讯科技（深圳）有限公司',
        ],
    ]): ResponseInterface;

    /**
     * 绑定收款商户号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D/bindrecipient
     */
    public function postAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
            'mchid' => '1230000109',
            'company_name' => '腾讯科技（深圳）有限公司',
        ],
    ]): PromiseInterface;
}
