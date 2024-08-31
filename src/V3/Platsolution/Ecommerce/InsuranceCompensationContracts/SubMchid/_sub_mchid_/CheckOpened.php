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
     * @link https://pay.weixin.qq.com/docs/partner/apis/plat-compensation/plat-compensation/check-insurance-compensation-opened.html
     */
    public function post(array $options = [
        'sub_mchid' => '1900000109',
    ]): ResponseInterface;

    /**
     * 查询保险理赔功能开通状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/plat-compensation/plat-compensation/check-insurance-compensation-opened.html#async
     */
    public function postAsync(array $options = [
        'sub_mchid' => '1900000109',
    ]): PromiseInterface;
}
