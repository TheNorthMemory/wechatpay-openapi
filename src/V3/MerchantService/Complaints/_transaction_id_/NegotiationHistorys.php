<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\Complaints\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface NegotiationHistorys
{
    /**
     * 查询投诉协商历史(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2021.01.08
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_7.shtml
     */
    public function get(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): ResponseInterface;

    /**
     * 查询投诉协商历史(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2021.01.08
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_7.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): PromiseInterface;
}
