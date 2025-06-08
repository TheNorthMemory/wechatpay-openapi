<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Stores\EntityMatches;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _batch_id_
{
    /**
     * 查询门店主体匹配结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/stores/entity-matches/%7Bbatch_id%7D
     */
    public function get(array $options = [
        'batch_id' => '1030000071201xxxxx',
        'query' => [
            'sp_mchid' => '12341234',
        ],
    ]): ResponseInterface;

    /**
     * 查询门店主体匹配结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/stores/entity-matches/%7Bbatch_id%7D
     */
    public function getAsync(array $options = [
        'batch_id' => '1030000071201xxxxx',
        'query' => [
            'sp_mchid' => '12341234',
        ],
    ]): PromiseInterface;
}
