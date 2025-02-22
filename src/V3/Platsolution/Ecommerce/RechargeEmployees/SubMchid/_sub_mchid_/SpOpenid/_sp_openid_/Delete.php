<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\RechargeEmployees\SubMchid\_sub_mchid_\SpOpenid\_sp_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Delete
{
    /**
     * 删除二级商户可扫码充值员工(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharge-employees/sub-mchid/%7Bsub_mchid%7D/sp-openid/%7Bsp_openid%7D/delete
     */
    public function post(array $options = [
        'sub_mchid' => '1900000109',
        'sp_openid' => 'oLTPCuCsfN3ABBz50VUZBNlHDbUU',
    ]): ResponseInterface;

    /**
     * 删除二级商户可扫码充值员工(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharge-employees/sub-mchid/%7Bsub_mchid%7D/sp-openid/%7Bsp_openid%7D/delete
     */
    public function postAsync(array $options = [
        'sub_mchid' => '1900000109',
        'sp_openid' => 'oLTPCuCsfN3ABBz50VUZBNlHDbUU',
    ]): PromiseInterface;
}
