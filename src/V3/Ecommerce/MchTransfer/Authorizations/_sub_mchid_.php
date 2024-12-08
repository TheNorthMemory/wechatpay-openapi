<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\MchTransfer\Authorizations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 查询二级商户商家转账授权状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/authorizations/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'sub_mchid' => '1900001109',
    ]): ResponseInterface;

    /**
     * 查询二级商户商家转账授权状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/authorizations/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900001109',
    ]): PromiseInterface;
}
