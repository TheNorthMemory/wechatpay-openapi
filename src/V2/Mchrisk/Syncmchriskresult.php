<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Syncmchriskresult
{
    /**
     * 事后-风险商户处理结果同步接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_293
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1230000109',
            'event_code' => '123456123',
            'certificates_number' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'certificates_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_no' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_bank' => '招商银行科技园支行',
            'business_license_number' => '00110105MA00BE3C1W',
            'company_name' => 'XXXXX有限公司',
            'store_address' => '广东省深圳市南山区深南大道10000号',
            'store_longitude' => '22.5461478801',
            'store_latitude' => '113.9410519639',
            'risk_type' => 'GAMBLING,SEXYCHEATTRANSACTION_DISPUTESONE_YUAN_BUYMULTILEVEL_DISTRIBUTION_REBATEOTHERNO_ABNORMALITIES',
            'punish_type' => 'CLOSE_PAY_PERMISSIONEXTEND_SETTLEMENT_CYCLECLOSE_WITHDRAW_CASHCLEAN_UPOTHER',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 事后-风险商户处理结果同步接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_293#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1230000109',
            'event_code' => '123456123',
            'certificates_number' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'certificates_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_no' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'settlement_card_bank' => '招商银行科技园支行',
            'business_license_number' => '00110105MA00BE3C1W',
            'company_name' => 'XXXXX有限公司',
            'store_address' => '广东省深圳市南山区深南大道10000号',
            'store_longitude' => '22.5461478801',
            'store_latitude' => '113.9410519639',
            'risk_type' => 'GAMBLING,SEXYCHEATTRANSACTION_DISPUTESONE_YUAN_BUYMULTILEVEL_DISTRIBUTION_REBATEOTHERNO_ABNORMALITIES',
            'punish_type' => 'CLOSE_PAY_PERMISSIONEXTEND_SETTLEMENT_CYCLECLOSE_WITHDRAW_CASHCLEAN_UPOTHER',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): PromiseInterface;
}
