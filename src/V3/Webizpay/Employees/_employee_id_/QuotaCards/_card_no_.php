<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Employees\_employee_id_\QuotaCards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _card_no_\Cancel $cancel
 * @property-read _card_no_\PaymentUrl $paymentUrl
 */
interface _card_no_
{
    /**
     * 企业商户查询企业支付额度卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/quota-cards/%7Bcard_no%7D
     */
    public function get(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'card_no' => '1068019671702503425',
        'query' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
        ],
    ]): ResponseInterface;

    /**
     * 企业商户查询企业支付额度卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/quota-cards/%7Bcard_no%7D
     */
    public function getAsync(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'card_no' => '1068019671702503425',
        'query' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
        ],
    ]): PromiseInterface;
}
