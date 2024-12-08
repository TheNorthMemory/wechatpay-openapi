<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface NegotiationHistorys
{
    /**
     * 查询投诉协商历史(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/negotiation-historys
     */
    public function get(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'query' => [
            'limit' => 50,
            'offset' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询投诉协商历史(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/negotiation-historys
     */
    public function getAsync(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'query' => [
            'limit' => 50,
            'offset' => 10,
        ],
    ]): PromiseInterface;
}
