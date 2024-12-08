<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities\_activity_id_\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Add
{
    /**
     * 新增活动发券商户号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D/merchants/add
     */
    public function post(array $options = [
        'activity_id' => '',
        'json' => [
            'merchant_id_list' => ['string'],
            'add_request_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 新增活动发券商户号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D/merchants/add
     */
    public function postAsync(array $options = [
        'activity_id' => '',
        'json' => [
            'merchant_id_list' => ['string'],
            'add_request_no' => '',
        ],
    ]): PromiseInterface;
}
