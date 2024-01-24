<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Businesscircle\UserAuthorizations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _openid_
{
    /**
     * 商圈积分授权查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/smart-business-circle/user-authorizations/query-user-authorization.html
     */
    public function get(array $options = [
        'openid' => 'oWmnN4xxxxxxxxxxe92NHIGf1xd8',
        'query' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx1234567890abcdef',
        ],
    ]): ResponseInterface;

    /**
     * 商圈积分授权查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/smart-business-circle/user-authorizations/query-user-authorization.html#async
     */
    public function getAsync(array $options = [
        'openid' => 'oWmnN4xxxxxxxxxxe92NHIGf1xd8',
        'query' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx1234567890abcdef',
        ],
    ]): PromiseInterface;
}
