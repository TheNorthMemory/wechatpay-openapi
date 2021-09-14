<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Complaints\_transaction_id_ $_transaction_id_
 */
interface Complaints
{
    /**
     * 查询投诉信息(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_1.shtml
     */
    public function get(array $options = [
        'query' => [
            'limit' => 0,
            'offset' => 0,
            'begin_date' => '',
            'end_date' => '',
            'sub_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询投诉信息(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_1.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 0,
            'offset' => 0,
            'begin_date' => '',
            'end_date' => '',
            'sub_mchid' => '',
        ],
    ]): PromiseInterface;
}
