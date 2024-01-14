<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Compliance\InactiveMerchantIdentityVerification;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Merchants\_sub_mchid_ $_sub_mchid_
 */
interface Merchants
{
    /**
     * 发起不活跃商户身份核实(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/inactive-merchant-identity-verification/inactive-mch-identity-verification/create-inactive-merchant-identity-verification.html
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900009231',
        ],
    ]): ResponseInterface;

    /**
     * 发起不活跃商户身份核实(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/inactive-merchant-identity-verification/inactive-mch-identity-verification/create-inactive-merchant-identity-verification.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900009231',
        ],
    ]): PromiseInterface;
}
