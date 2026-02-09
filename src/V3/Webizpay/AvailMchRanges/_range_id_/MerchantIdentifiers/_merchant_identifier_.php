<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\AvailMchRanges\_range_id_\MerchantIdentifiers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _merchant_identifier_
{
    /**
     * 删除商户标识(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges/%7Brange_id%7D/merchant-identifiers/%7Bmerchant_identifier%7D
     */
    public function delete(array $options = [
        'range_id' => '89f5123e-5ad4-4e0e-89b1-63ced0c798c5',
        'merchant_identifier' => '91110000710926094P',
        'json' => [
            'sp_mchid' => '12341234',
        ],
    ]): ResponseInterface;

    /**
     * 删除商户标识(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/avail-mch-ranges/%7Brange_id%7D/merchant-identifiers/%7Bmerchant_identifier%7D
     */
    public function deleteAsync(array $options = [
        'range_id' => '89f5123e-5ad4-4e0e-89b1-63ced0c798c5',
        'merchant_identifier' => '91110000710926094P',
        'json' => [
            'sp_mchid' => '12341234',
        ],
    ]): PromiseInterface;
}
