<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Capital\Capitallhh\Banks\_bank_alias_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Branches
{
    /**
     * 查询支行列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/banks/%7Bbank_alias_code%7D/branches
     */
    public function get(array $options = [
        'bank_alias_code' => '1000006247',
        'query' => [
            'city_code' => 536,
            'offset' => 0,
            'limit' => 200,
        ],
    ]): ResponseInterface;

    /**
     * 查询支行列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/banks/%7Bbank_alias_code%7D/branches
     */
    public function getAsync(array $options = [
        'bank_alias_code' => '1000006247',
        'query' => [
            'city_code' => 536,
            'offset' => 0,
            'limit' => 200,
        ],
    ]): PromiseInterface;
}
