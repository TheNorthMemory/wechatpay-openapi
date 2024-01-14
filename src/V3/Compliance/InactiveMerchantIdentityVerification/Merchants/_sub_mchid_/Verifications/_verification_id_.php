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
     * @link https://pay.weixin.qq.com/docs/partner/apis/inactive-merchant-identity-verification/inactive-mch-identity-verification/query-inactive-merchant-identity-verification.html
     */
    public function get(array $options = [
        'sub_mchid' => '1900009231',
        'verification_id' => '28011678863778000000123124312',
    ]): ResponseInterface;

    /**
     * 查询不活跃商户身份核实结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/inactive-merchant-identity-verification/inactive-mch-identity-verification/query-inactive-merchant-identity-verification.html#async
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900009231',
        'verification_id' => '28011678863778000000123124312',
    ]): PromiseInterface;
}
