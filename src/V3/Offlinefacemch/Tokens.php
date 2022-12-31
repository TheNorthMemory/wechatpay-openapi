<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlinefacemch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Tokens
{
    /**
     * 获取凭证授权接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html
     */
    public function post(array $options = [
        'json' => [
            'scene' => 'WEBSESSION',
            'web_init_data' => [
                'out_user_id' => '',
                'organization_id' => '',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 获取凭证授权接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'scene' => 'WEBSESSION',
            'web_init_data' => [
                'out_user_id' => '',
                'organization_id' => '',
            ],
        ],
    ]): PromiseInterface;
}
