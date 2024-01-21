<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Merchant\H5\Permission\Applications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _applyment_id_
{
    /**
     * 查询H5支付权限申请单详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_2.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
    ]): ResponseInterface;

    /**
     * 查询H5支付权限申请单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_2.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
    ]): PromiseInterface;

    /**
     * 修改H5支付权限申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_3.shtml
     */
    public function patch(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
        'json' => [
            'domains' => ['string'],
            'business_description' => '腾讯于1998年11月成立，是一家互联网公司，通过技术丰富互联网用户的生活，助力企业数字化升级。我们的使命是“用户为本 科技向善”',
            'company_register_cert' => '6uqyGjvHzOhsLleGFQVRF',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
            'website_state' => 'HAS_LAUNCHED',
            'website_url' => 'https://qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 修改H5支付权限申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_3.shtml#async
     */
    public function patchAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
        'json' => [
            'domains' => ['string'],
            'business_description' => '腾讯于1998年11月成立，是一家互联网公司，通过技术丰富互联网用户的生活，助力企业数字化升级。我们的使命是“用户为本 科技向善”',
            'company_register_cert' => '6uqyGjvHzOhsLleGFQVRF',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
            'website_state' => 'HAS_LAUNCHED',
            'website_url' => 'https://qq.com',
        ],
    ]): PromiseInterface;
}
