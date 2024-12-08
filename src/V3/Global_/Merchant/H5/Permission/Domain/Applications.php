<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Merchant\H5\Permission\Domain;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Applications\_applyment_id_ $_applyment_id_
 */
interface Applications
{
    /**
     * 创建H5支付域名修改申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant/h5/permission/domain/applications
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '2491935631',
            'domains' => ['string'],
            'website_url' => 'https://qq.com',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
            'website_state' => 'HAS_LAUNCHED',
            'notify_url' => 'https://pay.weixin.qq.com/wxpay/pay.action',
            'out_applyment_id' => '123456',
        ],
    ]): ResponseInterface;

    /**
     * 创建H5支付域名修改申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant/h5/permission/domain/applications
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '2491935631',
            'domains' => ['string'],
            'website_url' => 'https://qq.com',
            'website_business_page_pics' => ['MediaId'],
            'website_homepage_pics' => ['MediaId'],
            'website_state' => 'HAS_LAUNCHED',
            'notify_url' => 'https://pay.weixin.qq.com/wxpay/pay.action',
            'out_applyment_id' => '123456',
        ],
    ]): PromiseInterface;
}
