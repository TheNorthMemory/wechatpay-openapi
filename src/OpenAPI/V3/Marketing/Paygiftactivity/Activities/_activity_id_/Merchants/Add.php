<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities\_activity_id_\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Add
{
    /**
     * 新增活动发券商户号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_8.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_8.shtml#async
     */
    public function postAsync(array $options = [
        'activity_id' => '',
        'json' => [
            'merchant_id_list' => ['string'],
            'add_request_no' => '',
        ],
    ]): PromiseInterface;
}
