<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\Complaints\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface NegotiationHistorys
{
    /**
     * 查询投诉协商历史(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Fri Jan 08 2021 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_7.shtml
     */
    public function get(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): ResponseInterface;

    /**
     * 查询投诉协商历史(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Fri Jan 08 2021 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_7.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): PromiseInterface;
}
