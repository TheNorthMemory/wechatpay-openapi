<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\InsuranceCompensationContracts\SubMchid\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CheckOpened
{
    /**
     * 查询保险理赔功能开通状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/insurance-compensation-contracts/sub-mchid/%7Bsub_mchid%7D/check-opened
     */
    public function post(array $options = [
        'sub_mchid' => '1900000109',
    ]): ResponseInterface;

    /**
     * 查询保险理赔功能开通状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/insurance-compensation-contracts/sub-mchid/%7Bsub_mchid%7D/check-opened
     */
    public function postAsync(array $options = [
        'sub_mchid' => '1900000109',
    ]): PromiseInterface;
}
