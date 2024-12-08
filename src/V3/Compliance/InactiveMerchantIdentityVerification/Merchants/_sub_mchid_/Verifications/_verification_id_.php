<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Compliance\InactiveMerchantIdentityVerification\Merchants\_sub_mchid_\Verifications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _verification_id_
{
    /**
     * 查询不活跃商户身份核实结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/compliance/inactive-merchant-identity-verification/merchants/%7Bsub_mchid%7D/verifications/%7Bverification_id%7D
     */
    public function get(array $options = [
        'sub_mchid' => '1900009231',
        'verification_id' => '28011678863778000000123124312',
    ]): ResponseInterface;

    /**
     * 查询不活跃商户身份核实结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/compliance/inactive-merchant-identity-verification/merchants/%7Bsub_mchid%7D/verifications/%7Bverification_id%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900009231',
        'verification_id' => '28011678863778000000123124312',
    ]): PromiseInterface;
}
