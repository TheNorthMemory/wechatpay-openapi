<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read ServiceAccountApplications\_out_apply_no_ $_out_apply_no_
 */
interface ServiceAccountApplications
{
    /**
     * 收付通子商户申请绑定支付分服务(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/partner-service-account/create-service-account-application.html
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'out_apply_no' => '1234323JKHDFE1243252',
            'result_notify_url' => 'https://api.test.com',
        ],
    ]): ResponseInterface;

    /**
     * 收付通子商户申请绑定支付分服务(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/partner-service-account/create-service-account-application.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'out_apply_no' => '1234323JKHDFE1243252',
            'result_notify_url' => 'https://api.test.com',
        ],
    ]): PromiseInterface;
}
