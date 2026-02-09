<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read AvailMchRanges\_range_id_ $_range_id_
 */
interface AvailMchRanges
{
    /**
     * 创建可用商户范围(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'identifier_type' => 'ORGANIZATION_CODE',
        ],
    ]): ResponseInterface;

    /**
     * 创建可用商户范围(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'identifier_type' => 'ORGANIZATION_CODE',
        ],
    ]): PromiseInterface;

    /**
     * 查询可用商户范围列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges#get
     */
    public function get(array $options = [
        'query' => [
            'sp_mchid' => '12341234',
        ],
    ]): ResponseInterface;

    /**
     * 查询可用商户范围列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges#get
     */
    public function getAsync(array $options = [
        'query' => [
            'sp_mchid' => '12341234',
        ],
    ]): PromiseInterface;
}
