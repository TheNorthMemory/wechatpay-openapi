<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply\Mchsubjectalterapplyment\Merchant\_merchant_code_\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 查询申请单状态-使用业务单号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_3_3.shtml
     */
    public function get(array $options = [
        'out_request_no' => '1900013511_10000',
        'json' => [
            'merchant_code' => '1900006491',
        ],
    ]): ResponseInterface;

    /**
     * 查询申请单状态-使用业务单号(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_3_3.shtml#async
     */
    public function getAsync(array $options = [
        'out_request_no' => '1900013511_10000',
        'json' => [
            'merchant_code' => '1900006491',
        ],
    ]): PromiseInterface;
}
