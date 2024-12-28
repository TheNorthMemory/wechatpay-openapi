<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 查询子商户（融合钱包）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchants/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'sub_mchid' => '20000100',
        'query' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
        ],
    ]): ResponseInterface;

    /**
     * 查询子商户（融合钱包）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchants/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'sub_mchid' => '20000100',
        'query' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
        ],
    ]): PromiseInterface;

    /**
     * 修改子商户（融合钱包）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchants/%7Bsub_mchid%7D#patch
     */
    public function patch(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'name' => 'Merchant name',
            'sub_mchid' => '示例值: 20000100',
            'shortname' => 'Merchant shortname',
            'office_phone' => '075586010000',
            'contact' => [
                'name' => '李先生',
                'phone' => '075586010000',
                'email' => 'test@test.com',
            ],
            'business_category' => 644,
            'channel_id' => '3200000001',
            'merchant_country_code' => '344',
            'merchant_type' => 'ENTERPRISE',
            'registration_certificate_number' => '5555-8888',
            'registration_certificate_date' => '2020-10-16',
            'registration_certificate_copy' => 'w7yQFawBtja5uEdm_aoXokv2SDoEmHIPs',
            'settlement_bank_number' => '555588889999',
            'business' => [
                'business_type' => 'BOTH',
                'app_download' => 'https://download.qq.com',
                'website' => 'https://www.qq.com',
                'office_account' => 'wx8888888888888888',
                'mini_program' => 'wx8888888888888888',
                'store_address' => '10F World Finance Centre (South Office), 11 Canton Road, Tsim Sha Tsui, Hong Kong',
                'store_photos' => '["Media_id1", "Media_id2", "Media_id3"]',
                'mcc' => '4214',
            ],
            'director' => [
                'name' => 'Bob',
                'number' => '5555-8888',
            ],
            'principal' => [
                'name' => 'Bob',
                'number' => '5555-8888',
            ],
            'apply_h5_payment' => true,
            'h5_payment_apply_info' => [
                'website_url' => 'https://qq.com',
                'domains' => ['www.qq.com'],
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 修改子商户（融合钱包）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchants/%7Bsub_mchid%7D#patch
     */
    public function patchAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'name' => 'Merchant name',
            'sub_mchid' => '示例值: 20000100',
            'shortname' => 'Merchant shortname',
            'office_phone' => '075586010000',
            'contact' => [
                'name' => '李先生',
                'phone' => '075586010000',
                'email' => 'test@test.com',
            ],
            'business_category' => 644,
            'channel_id' => '3200000001',
            'merchant_country_code' => '344',
            'merchant_type' => 'ENTERPRISE',
            'registration_certificate_number' => '5555-8888',
            'registration_certificate_date' => '2020-10-16',
            'registration_certificate_copy' => 'w7yQFawBtja5uEdm_aoXokv2SDoEmHIPs',
            'settlement_bank_number' => '555588889999',
            'business' => [
                'business_type' => 'BOTH',
                'app_download' => 'https://download.qq.com',
                'website' => 'https://www.qq.com',
                'office_account' => 'wx8888888888888888',
                'mini_program' => 'wx8888888888888888',
                'store_address' => '10F World Finance Centre (South Office), 11 Canton Road, Tsim Sha Tsui, Hong Kong',
                'store_photos' => '["Media_id1", "Media_id2", "Media_id3"]',
                'mcc' => '4214',
            ],
            'director' => [
                'name' => 'Bob',
                'number' => '5555-8888',
            ],
            'principal' => [
                'name' => 'Bob',
                'number' => '5555-8888',
            ],
            'apply_h5_payment' => true,
            'h5_payment_apply_info' => [
                'website_url' => 'https://qq.com',
                'domains' => ['www.qq.com'],
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
