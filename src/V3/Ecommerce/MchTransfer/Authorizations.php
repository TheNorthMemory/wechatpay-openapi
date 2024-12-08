<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Authorizations\_sub_mchid_ $_sub_mchid_
 */
interface Authorizations
{
    /**
     * 申请二级商户商家转账授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/authorizations
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'agreement_list' => [[
                'agreement_code' => '1',
                'agreement_version' => '20230101',
                'sign_organization' => '示例有限责任公司',
                'sign_time' => '2015-05-20T13:29:35.120+08:00',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 申请二级商户商家转账授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/authorizations
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'agreement_list' => [[
                'agreement_code' => '1',
                'agreement_version' => '20230101',
                'sign_organization' => '示例有限责任公司',
                'sign_time' => '2015-05-20T13:29:35.120+08:00',
            ],],
        ],
    ]): PromiseInterface;
}
