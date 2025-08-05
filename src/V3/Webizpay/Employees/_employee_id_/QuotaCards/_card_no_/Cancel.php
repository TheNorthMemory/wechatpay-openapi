<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Employees\_employee_id_\QuotaCards\_card_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 企业商户作废员工企业支付额度卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/quota-cards/%7Bcard_no%7D/cancel
     */
    public function post(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'card_no' => '1068019671702503425',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'reason' => '商户主动作废',
        ],
    ]): ResponseInterface;

    /**
     * 企业商户作废员工企业支付额度卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/quota-cards/%7Bcard_no%7D/cancel
     */
    public function postAsync(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'card_no' => '1068019671702503425',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'reason' => '商户主动作废',
        ],
    ]): PromiseInterface;
}
