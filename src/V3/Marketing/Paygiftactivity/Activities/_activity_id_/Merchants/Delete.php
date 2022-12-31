<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities\_activity_id_\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Delete
{
    /**
     * 删除活动发券商户号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_10.shtml
     */
    public function post(array $options = [
        'activity_id' => '',
        'json' => [
            'merchant_id_list' => ['string'],
            'delete_request_no' => '100002322019090134234sfdf',
        ],
    ]): ResponseInterface;

    /**
     * 删除活动发券商户号(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_10.shtml#async
     */
    public function postAsync(array $options = [
        'activity_id' => '',
        'json' => [
            'merchant_id_list' => ['string'],
            'delete_request_no' => '100002322019090134234sfdf',
        ],
    ]): PromiseInterface;
}
