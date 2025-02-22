<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read RechargeEmployees\SubMchid $subMchid
 */
interface RechargeEmployees
{
    /**
     * 添加二级商户可扫码充值员工(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharge-employees
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_openid' => 'oLTPCuCsfN3ABBz50VUZBNlHDbUU',
        ],
    ]): ResponseInterface;

    /**
     * 添加二级商户可扫码充值员工(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharge-employees
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_openid' => 'oLTPCuCsfN3ABBz50VUZBNlHDbUU',
        ],
    ]): PromiseInterface;
}
