<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Merchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface BaseInformation
{
    /**
     * 获取商户开票基础信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/merchant/base-information
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 获取商户开票基础信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/merchant/base-information
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
