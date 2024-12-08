<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Capital\Capitallhh\Banks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CorporateBanking
{
    /**
     * 查询支持对公业务的银行列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/banks/corporate-banking
     */
    public function get(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 200,
        ],
    ]): ResponseInterface;

    /**
     * 查询支持对公业务的银行列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/banks/corporate-banking
     */
    public function getAsync(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 200,
        ],
    ]): PromiseInterface;
}
