<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read InsuranceCompensationContracts\SubMchid $subMchid
 */
interface InsuranceCompensationContracts
{
    /**
     * 开通保险理赔功能(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/plat-compensation/plat-compensation/open-insurance-compensation.html
     */
    public function post(array $options = [
        'json' => [
            'out_apply_no' => 'No123456',
            'sub_mchid' => '1900000109',
            'agreement_list' => [[
                'agreement_code' => '微信支付运营功能服务协议（平台二级商户）',
                'agreement_version' => '20240815',
                'sign_organization' => '温州名优贸易',
                'sign_time' => '2024-08-08T10:34:56+08:00',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 开通保险理赔功能(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/plat-compensation/plat-compensation/open-insurance-compensation.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_apply_no' => 'No123456',
            'sub_mchid' => '1900000109',
            'agreement_list' => [[
                'agreement_code' => '微信支付运营功能服务协议（平台二级商户）',
                'agreement_version' => '20240815',
                'sign_organization' => '温州名优贸易',
                'sign_time' => '2024-08-08T10:34:56+08:00',
            ],],
        ],
    ]): PromiseInterface;
}
