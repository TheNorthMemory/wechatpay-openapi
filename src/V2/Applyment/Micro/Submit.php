<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Submit
{
    /**
     * 申请入驻(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.05.23
     * @link https://wechatpay.im/openapi/v2/applyment/micro/submit
     */
    public function post(array $options = [
        'xml' => [
            'version' => '3.0',
            'cert_sn' => '5663476TEREGD45FH63GDFHFG657FCHBFG',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'business_code' => '123456',
            'id_card_copy' => '',
            'id_card_national' => '',
            'id_card_name' => '佑佑',
            'id_card_number' => '',
            'id_card_valid_time' => \json_encode([
                '1970-01-01',
                '长期',
            ]),
            'account_name' => '',
            'account_bank' => '工商银行',
            'bank_address_code' => '110000',
            'bank_name' => '深圳农村商业银行xxx支行',
            'account_number' => '',
            'store_name' => '',
            'store_address_code' => '110000',
            'store_street' => '',
            'store_longitude' => '113.941355',
            'store_latitude' => '22.546245',
            'store_entrance_pic' => '',
            'indoor_pic' => '',
            'address_certification' => '',
            'merchant_shortname' => '',
            'service_phone' => '',
            'product_desc' => '',
            'rate' => '0.6%',
            'business_addition_desc' => '',
            'business_addition_pics' => \json_encode([
                '123',
                '456',
            ]),
            'contact' => '',
            'contact_phone' => '',
            'contact_email' => '',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 申请入驻(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.05.23
     * @link https://wechatpay.im/openapi/v2/applyment/micro/submit
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '3.0',
            'cert_sn' => '5663476TEREGD45FH63GDFHFG657FCHBFG',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'business_code' => '123456',
            'id_card_copy' => '',
            'id_card_national' => '',
            'id_card_name' => '佑佑',
            'id_card_number' => '',
            'id_card_valid_time' => \json_encode([
                '1970-01-01',
                '长期',
            ]),
            'account_name' => '',
            'account_bank' => '工商银行',
            'bank_address_code' => '110000',
            'bank_name' => '深圳农村商业银行xxx支行',
            'account_number' => '',
            'store_name' => '',
            'store_address_code' => '110000',
            'store_street' => '',
            'store_longitude' => '113.941355',
            'store_latitude' => '22.546245',
            'store_entrance_pic' => '',
            'indoor_pic' => '',
            'address_certification' => '',
            'merchant_shortname' => '',
            'service_phone' => '',
            'product_desc' => '',
            'rate' => '0.6%',
            'business_addition_desc' => '',
            'business_addition_pics' => \json_encode([
                '123',
                '456',
            ]),
            'contact' => '',
            'contact_phone' => '',
            'contact_email' => '',
        ],
        'security' => true,
    ]): PromiseInterface;
}
