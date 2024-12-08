<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Merchant\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Check
{
    /**
     * 检查子商户开票功能状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/merchant/%7Bsub_mchid%7D/check
     */
    public function post(array $options = [
        'sub_mchid' => '1900000109',
    ]): ResponseInterface;

    /**
     * 检查子商户开票功能状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/merchant/%7Bsub_mchid%7D/check
     */
    public function postAsync(array $options = [
        'sub_mchid' => '1900000109',
    ]): PromiseInterface;
}
