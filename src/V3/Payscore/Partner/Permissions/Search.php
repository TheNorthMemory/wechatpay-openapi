<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Permissions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Search
{
    /**
     * 查询与用户授权记录（openid）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions/search
     */
    public function get(array $options = [
        'query' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): ResponseInterface;

    /**
     * 查询与用户授权记录（openid）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions/search
     */
    public function getAsync(array $options = [
        'query' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): PromiseInterface;
}
