<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _stub_
{
    /**
     * 二级商户进件(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/applyments/chapter3_1.shtml
     */
    public function post(array $options = [
        'stub' => '',
        'json' => [
            'out_request_no' => '',
            'organization_type' => '',
            'business_license_info' => [],
            'organization_cert_info' => [],
            'id_doc_type' => '',
            'id_card_info' => [],
            'id_doc_info' => [],
            'need_account_info' => '',
            'account_info' => [],
            'contact_info' => [],
            'sales_scene_info' => [],
            'merchant_shortname' => '',
            'qualifications' => [],
            'business_addition_pics' => [],
            'business_addition_desc' => [],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 二级商户进件(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/applyments/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'stub' => '',
        'json' => [
            'out_request_no' => '',
            'organization_type' => '',
            'business_license_info' => [],
            'organization_cert_info' => [],
            'id_doc_type' => '',
            'id_card_info' => [],
            'id_doc_info' => [],
            'need_account_info' => '',
            'account_info' => [],
            'contact_info' => [],
            'sales_scene_info' => [],
            'merchant_shortname' => '',
            'qualifications' => [],
            'business_addition_pics' => [],
            'business_addition_desc' => [],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
