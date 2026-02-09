<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\AvailMchRanges\_range_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read MerchantIdentifiers\_merchant_identifier_ $_merchant_identifier_
 */
interface MerchantIdentifiers
{
    /**
     * 添加商户标识(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges/%7Brange_id%7D/merchant-identifiers
     */
    public function post(array $options = [
        'range_id' => '89f5123e-5ad4-4e0e-89b1-63ced0c798c5',
        'json' => [
            'sp_mchid' => '12341234',
            'merchant_identifier' => '91110000710926094P',
        ],
    ]): ResponseInterface;

    /**
     * 添加商户标识(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges/%7Brange_id%7D/merchant-identifiers
     */
    public function postAsync(array $options = [
        'range_id' => '89f5123e-5ad4-4e0e-89b1-63ced0c798c5',
        'json' => [
            'sp_mchid' => '12341234',
            'merchant_identifier' => '91110000710926094P',
        ],
    ]): PromiseInterface;

    /**
     * 查询商户标识列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges/%7Brange_id%7D/merchant-identifiers#get
     */
    public function get(array $options = [
        'range_id' => '89f5123e-5ad4-4e0e-89b1-63ced0c798c5',
        'query' => [
            'sp_mchid' => '12341234',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 查询商户标识列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges/%7Brange_id%7D/merchant-identifiers#get
     */
    public function getAsync(array $options = [
        'range_id' => '89f5123e-5ad4-4e0e-89b1-63ced0c798c5',
        'query' => [
            'sp_mchid' => '12341234',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): PromiseInterface;
}
