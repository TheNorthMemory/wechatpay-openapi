<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner\SubMchAuthorizations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 查询子商户商家转账授权状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/sub-mch-authorizations/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'sub_mchid' => '1900001121',
    ]): ResponseInterface;

    /**
     * 查询子商户商家转账授权状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/sub-mch-authorizations/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900001121',
    ]): PromiseInterface;
}
