<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Merchant\H5\Permission\Domain\Applications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _applyment_id_
{
    /**
     * 查询H5支付域名修改申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_5.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
    ]): ResponseInterface;

    /**
     * 查询H5支付域名修改申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_5.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
    ]): PromiseInterface;

    /**
     * 修改H5支付域名修改申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_6.shtml
     */
    public function patch(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
        'json' => [
            'domains' => ['string'],
            'website_state' => 'HAS_LAUNCHED',
            'website_url' => 'https://qq.com',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
        ],
    ]): ResponseInterface;

    /**
     * 修改H5支付域名修改申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_4_6.shtml#async
     */
    public function patchAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'applyment_id' => '100000',
        'json' => [
            'domains' => ['string'],
            'website_state' => 'HAS_LAUNCHED',
            'website_url' => 'https://qq.com',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
        ],
    ]): PromiseInterface;
}
