<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\Complaints;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _transaction_id_\NegotiationHistorys $negotiationHistorys
 */
interface _transaction_id_
{
    /**
     * 查询投诉详情(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_8.shtml
     */
    public function get(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): ResponseInterface;

    /**
     * 查询投诉详情(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_8.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): PromiseInterface;
}
