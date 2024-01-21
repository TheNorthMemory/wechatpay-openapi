<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Merchant\H5\Permission;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Applications\_applyment_id_ $_applyment_id_
 */
interface Applications
{
    /**
     * 创建H5支付权限申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_1.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'business_description' => '腾讯于1998年11月成立，是一家互联网公司，通过技术丰富互联网用户的生活，助力企业数字化升级。我们的使命是“用户为本 科技向善”',
            'sub_mchid' => '2491935631',
            'domains' => ['string'],
            'company_register_cert' => '6uqyGjvHzOhsLleGFQVRF',
            'transaction_limit_type' => 'UN_LAUNCHED_WEBSITE_LIMIT',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
            'website_state' => 'HAS_LAUNCHED',
            'website_url' => 'https://qq.com',
            'notify_url' => 'https://pay.weixin.qq.com/wxpay/pay.action',
            'applyment_type' => 'APPLY_FOR_PAYMENT_AUTHORITY',
        ],
    ]): ResponseInterface;

    /**
     * 创建H5支付权限申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_1.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'business_description' => '腾讯于1998年11月成立，是一家互联网公司，通过技术丰富互联网用户的生活，助力企业数字化升级。我们的使命是“用户为本 科技向善”',
            'sub_mchid' => '2491935631',
            'domains' => ['string'],
            'company_register_cert' => '6uqyGjvHzOhsLleGFQVRF',
            'transaction_limit_type' => 'UN_LAUNCHED_WEBSITE_LIMIT',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
            'website_state' => 'HAS_LAUNCHED',
            'website_url' => 'https://qq.com',
            'notify_url' => 'https://pay.weixin.qq.com/wxpay/pay.action',
            'applyment_type' => 'APPLY_FOR_PAYMENT_AUTHORITY',
        ],
    ]): PromiseInterface;
}
