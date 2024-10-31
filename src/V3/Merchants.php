<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Merchants\_sub_mchid_ $_sub_mchid_
 */
interface Merchants
{
    /**
     * 子商户进件（融合钱包）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/Onborading_Sub_Merchant/chapter3_1.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'name' => 'Merchant name',
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
            'registration_certificate_copy' => 'w7yQFawBtja5uEdm_aoGhHuxkrIaqB4GzPCeo963zXKcO2hDVD8AjXIpgrj-x95m5iclsanHYauUt1__DsWXok2NqRliv2SDL42QoEmHIPs',
            'settlement_bank_number' => '555588889999',
            'business' => [
                'business_type' => 'BOTH',
                'app_download' => 'https://download.qq.com',
                'website' => 'https://www.qq.com',
                'office_account' => 'wx8888888888888888',
                'mini_program' => 'wx8888888888888888',
                'store_address' => '10F World Finance Centre (South Office), 11 Canton Road, Tsim Sha Tsui, Hong Kong',
                'store_photos' => '[Media_id1, Media_id2, Media_id3]',
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
        ],
        'headers' => [
            'Idempotency-Key' => 'GzPCeo963zXKcO2hDVD8AjXIpgrj',
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 子商户进件（融合钱包）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/Onborading_Sub_Merchant/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'name' => 'Merchant name',
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
            'registration_certificate_copy' => 'w7yQFawBtja5uEdm_aoGhHuxkrIaqB4GzPCeo963zXKcO2hDVD8AjXIpgrj-x95m5iclsanHYauUt1__DsWXok2NqRliv2SDL42QoEmHIPs',
            'settlement_bank_number' => '555588889999',
            'business' => [
                'business_type' => 'BOTH',
                'app_download' => 'https://download.qq.com',
                'website' => 'https://www.qq.com',
                'office_account' => 'wx8888888888888888',
                'mini_program' => 'wx8888888888888888',
                'store_address' => '10F World Finance Centre (South Office), 11 Canton Road, Tsim Sha Tsui, Hong Kong',
                'store_photos' => '[Media_id1, Media_id2, Media_id3]',
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
        ],
        'headers' => [
            'Idempotency-Key' => 'GzPCeo963zXKcO2hDVD8AjXIpgrj',
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;

    /**
     * 修改子商户（融合钱包）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/Onborading_Sub_Merchant/chapter3_3.shtml
     */
    public function put(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_mchid' => '20000100',
            'name' => 'Merchant name',
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
            'registration_certificate_copy' => 'w7yQFawBtja5uEdm_aoGhHuxkrIaqB4GzPCeo963zXKcO2hDVD8AjXIpgrj-x95m5iclsanHYauUt1__DsWXok2NqRliv2SDL42QoEmHIPs',
            'settlement_bank_number' => '555588889999',
            'business' => [
                'business_type' => 'BOTH',
                'app_download' => 'https://download.qq.com',
                'website' => 'https://www.qq.com',
                'office_account' => 'wx8888888888888888',
                'mini_program' => 'wx8888888888888888',
                'store_address' => '10F World Finance Centre (South Office), 11 Canton Road, Tsim Sha Tsui, Hong Kong',
                'store_photos' => '[Media_id1, Media_id2, Media_id3]',
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
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 修改子商户（融合钱包）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/Onborading_Sub_Merchant/chapter3_3.shtml#async
     */
    public function putAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_mchid' => '20000100',
            'name' => 'Merchant name',
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
            'registration_certificate_copy' => 'w7yQFawBtja5uEdm_aoGhHuxkrIaqB4GzPCeo963zXKcO2hDVD8AjXIpgrj-x95m5iclsanHYauUt1__DsWXok2NqRliv2SDL42QoEmHIPs',
            'settlement_bank_number' => '555588889999',
            'business' => [
                'business_type' => 'BOTH',
                'app_download' => 'https://download.qq.com',
                'website' => 'https://www.qq.com',
                'office_account' => 'wx8888888888888888',
                'mini_program' => 'wx8888888888888888',
                'store_address' => '10F World Finance Centre (South Office), 11 Canton Road, Tsim Sha Tsui, Hong Kong',
                'store_photos' => '[Media_id1, Media_id2, Media_id3]',
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
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
