<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _modifyinstitutionsub_
{
    /**
     * 修改子商户(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/sub_merchant_entry/chapter3_3.shtml
     */
    public function post(array $options = [
        'modifyinstitutionsub' => 'modifyInstitutionsub', // 固定参数(URI上有大写字符)
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'sub_mch_id' => '12345678',
            'merchant_name' => 'Merchantname',
            'channel_id' => '101',
            'merchant_shortname' => 'Merchantshortname',
            'merchant_country_code' => '344',
            'merchant_type' => 'ENTERPRISE',
            'mcc' => '4214',
            'registration_certificate_number' => '5555-8888',
            'registration_certificate_date' => '2020-10-16',
            'registration_certificate_copy' => 'aoGhHuxkrIaqB4GzPCeo963zXKcO2hDVD8AjXIpgrj',
            'business_type' => 'BOTH',
            'app_download' => 'https://download.qq.com',
            'business_website' => 'https://www.qq.com',
            'office_account' => 'wx8888888888888888',
            'mini_program' => 'wx8888888888888888',
            'store_address' => '广东省深圳市南山区科技中一道10000号',
            'store_photos' => '[Media_id1,Media_id2,Media_id3]',
            'director_name' => 'BobZhang',
            'director_id_number' => '5555—8888',
            'principal_name' => 'BobZhang',
            'principal_id_number' => '5555—8888',
            'office_phone' => '075586010000',
            'contact_name' => '李先生',
            'contact_phone' => '075586010000',
            'contact_email' => 'test@test.com',
            'settlement_bank_number' => '555588889999',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 修改子商户(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/sub_merchant_entry/chapter3_3.shtml#async
     */
    public function postAsync(array $options = [
        'modifyinstitutionsub' => 'modifyInstitutionsub', // 固定参数(URI上有大写字符)
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'sub_mch_id' => '12345678',
            'merchant_name' => 'Merchantname',
            'channel_id' => '101',
            'merchant_shortname' => 'Merchantshortname',
            'merchant_country_code' => '344',
            'merchant_type' => 'ENTERPRISE',
            'mcc' => '4214',
            'registration_certificate_number' => '5555-8888',
            'registration_certificate_date' => '2020-10-16',
            'registration_certificate_copy' => 'aoGhHuxkrIaqB4GzPCeo963zXKcO2hDVD8AjXIpgrj',
            'business_type' => 'BOTH',
            'app_download' => 'https://download.qq.com',
            'business_website' => 'https://www.qq.com',
            'office_account' => 'wx8888888888888888',
            'mini_program' => 'wx8888888888888888',
            'store_address' => '广东省深圳市南山区科技中一道10000号',
            'store_photos' => '[Media_id1,Media_id2,Media_id3]',
            'director_name' => 'BobZhang',
            'director_id_number' => '5555—8888',
            'principal_name' => 'BobZhang',
            'principal_id_number' => '5555—8888',
            'office_phone' => '075586010000',
            'contact_name' => '李先生',
            'contact_phone' => '075586010000',
            'contact_email' => 'test@test.com',
            'settlement_bank_number' => '555588889999',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}
