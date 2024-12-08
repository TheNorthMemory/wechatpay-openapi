<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Complaints\_transaction_id_ $_transaction_id_
 */
interface Complaints
{
    /**
     * 查询投诉信息(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints
     */
    public function get(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'begin_date' => '2019-01-01',
            'end_date' => '2019-01-01',
            'sub_mchid' => '1900012181',
        ],
    ]): ResponseInterface;

    /**
     * 查询投诉信息(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'begin_date' => '2019-01-01',
            'end_date' => '2019-01-01',
            'sub_mchid' => '1900012181',
        ],
    ]): PromiseInterface;
}
