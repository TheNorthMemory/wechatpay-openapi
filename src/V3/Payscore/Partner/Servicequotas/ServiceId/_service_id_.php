<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Servicequotas\ServiceId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _service_id_
{
    /**
     * 查询用户分层对应建议先享金额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/service-quota/get-partner-user-risk-level-quota.html
     */
    public function get(array $options = [
        'service_id' => '2002000000000558128851361561536',
        'query' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6999',
            'risk_level_version' => 1,
        ],
    ]): ResponseInterface;

    /**
     * 查询用户分层对应建议先享金额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/service-quota/get-partner-user-risk-level-quota.html#async
     */
    public function getAsync(array $options = [
        'service_id' => '2002000000000558128851361561536',
        'query' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6999',
            'risk_level_version' => 1,
        ],
    ]): PromiseInterface;
}
