<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querymchrisk
{
    /**
     * 事前-风险商户核查接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/querymchrisk
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'cert_serial_number' => 'XXXXX',
            'certificates_number' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'certificates_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_no' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'settlement_card_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_bank' => '招商银行科技园支行',
            'business_license_number' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'company_name' => 'XXXXX有限公司',
            'store_address' => '广东省深圳市南山区深南大道10000号',
            'store_longitude' => '22.5461478801',
            'store_latitude' => '113.9410519639',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 事前-风险商户核查接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/querymchrisk
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'cert_serial_number' => 'XXXXX',
            'certificates_number' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'certificates_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_no' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'settlement_card_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_bank' => '招商银行科技园支行',
            'business_license_number' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'company_name' => 'XXXXX有限公司',
            'store_address' => '广东省深圳市南山区深南大道10000号',
            'store_longitude' => '22.5461478801',
            'store_latitude' => '113.9410519639',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): PromiseInterface;
}
