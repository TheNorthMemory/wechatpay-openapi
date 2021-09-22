<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Submitupgrade
{
    /**
     * 提交升级申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=28_2&index=2
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'cert_sn' => '5663476TEREGD45FH63GDFHFG657FCHBFG',
            'sub_mch_id' => '1230000109',
            'organization_type' => '2',
            'business_license_copy' => '',
            'business_license_number' => '123456789012345',
            'merchant_name' => '深圳腾讯科技有限公司',
            'company_address' => '深圳市腾讯大厦',
            'legal_person' => '',
            'business_time' => '["1970-01-01","长期"]',
            'business_licence_type' => '1762',
            'organization_copy' => '',
            'organization_number' => '1234567-1',
            'organization_time' => '["1970-01-01","长期"]',
            'account_name' => '',
            'account_bank' => '工商银行',
            'bank_address_code' => '11000',
            'bank_name' => '深圳农村商业银行xxx支行',
            'account_number' => '',
            'merchant_shortname' => '',
            'business' => '',
            'qualifications' => '["xxx","xxx"]',
            'business_scene' => '[1721]',
            'business_addition_desc' => '',
            'business_addition_pics' => '["123","456"]',
            'contact_email' => '123@qq.com',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 提交升级申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=28_2&index=2#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'cert_sn' => '5663476TEREGD45FH63GDFHFG657FCHBFG',
            'sub_mch_id' => '1230000109',
            'organization_type' => '2',
            'business_license_copy' => '',
            'business_license_number' => '123456789012345',
            'merchant_name' => '深圳腾讯科技有限公司',
            'company_address' => '深圳市腾讯大厦',
            'legal_person' => '',
            'business_time' => '["1970-01-01","长期"]',
            'business_licence_type' => '1762',
            'organization_copy' => '',
            'organization_number' => '1234567-1',
            'organization_time' => '["1970-01-01","长期"]',
            'account_name' => '',
            'account_bank' => '工商银行',
            'bank_address_code' => '11000',
            'bank_name' => '深圳农村商业银行xxx支行',
            'account_number' => '',
            'merchant_shortname' => '',
            'business' => '',
            'qualifications' => '["xxx","xxx"]',
            'business_scene' => '[1721]',
            'business_addition_desc' => '',
            'business_addition_pics' => '["123","456"]',
            'contact_email' => '123@qq.com',
        ],
        'security' => true,
    ]): PromiseInterface;
}
