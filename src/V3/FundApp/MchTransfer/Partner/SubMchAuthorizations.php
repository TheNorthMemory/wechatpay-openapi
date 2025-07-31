<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read SubMchAuthorizations\_sub_mchid_ $_sub_mchid_
 */
interface SubMchAuthorizations
{
    /**
     * 申请子商户商家转账授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/sub-mch-authorizations
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001121',
            'out_apply_no' => 'apply2020042013',
        ],
    ]): ResponseInterface;

    /**
     * 申请子商户商家转账授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/sub-mch-authorizations
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001121',
            'out_apply_no' => 'apply2020042013',
        ],
    ]): PromiseInterface;
}
