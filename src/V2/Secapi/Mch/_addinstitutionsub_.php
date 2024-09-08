<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _addinstitutionsub_
{
    /**
     * 进件子商户(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/sub_merchant_entry/chapter3_1.shtml
     */
    public function post(array $options = [
        'addinstitutionsub' => 'addInstitutionsub', // 固定参数(URI上有大写字符)
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'channel_id' => '101',
            'merchant_name' => 'Merchantname',
            'merchant_shortname' => 'Merchantshortname',
            'merchant_remark' => 'ABC123456',
            'merchant_country_code' => '344',
            'merchant_type' => 'ENTERPRISE',
            'business_category' => '343',
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
            'store_photos' => '["ySdrxMVb92Rmf9p2n7aJ4nAkJsqjYAt8uWQxBQ_p2Jgs","ySdVr5RR9cPRAq5FS0BKJxc78190x27psCzAwNzi6VdEI","yS2xjJ9lhuVwUyQbq0AYmP80p50vVuhdSjsKM"]',
            'director_name' => 'BobZhang',
            'director_id_number' => '5555—8888',
            'principal_name' => 'BobZhang',
            'principal_id_number' => '5555—8888',
            'office_phone' => '075586010000',
            'contact_name' => '李先生',
            'contact_phone' => '075586010000',
            'contact_email' => 'test@test.com',
            'settlement_bank_number' => '555588889999',
            'apply_h5_payment' => 'YES',
            'h5_website_url' => 'https://qq.com',
            'h5_domains' => '["www.qq.com","www.weixin.com"]',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 进件子商户(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/sub_merchant_entry/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'addinstitutionsub' => 'addInstitutionsub', // 固定参数(URI上有大写字符)
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'channel_id' => '101',
            'merchant_name' => 'Merchantname',
            'merchant_shortname' => 'Merchantshortname',
            'merchant_remark' => 'ABC123456',
            'merchant_country_code' => '344',
            'merchant_type' => 'ENTERPRISE',
            'business_category' => '343',
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
            'store_photos' => '["ySdrxMVb92Rmf9p2n7aJ4nAkJsqjYAt8uWQxBQ_p2Jgs","ySdVr5RR9cPRAq5FS0BKJxc78190x27psCzAwNzi6VdEI","yS2xjJ9lhuVwUyQbq0AYmP80p50vVuhdSjsKM"]',
            'director_name' => 'BobZhang',
            'director_id_number' => '5555—8888',
            'principal_name' => 'BobZhang',
            'principal_id_number' => '5555—8888',
            'office_phone' => '075586010000',
            'contact_name' => '李先生',
            'contact_phone' => '075586010000',
            'contact_email' => 'test@test.com',
            'settlement_bank_number' => '555588889999',
            'apply_h5_payment' => 'YES',
            'h5_website_url' => 'https://qq.com',
            'h5_domains' => '["www.qq.com","www.weixin.com"]',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}
