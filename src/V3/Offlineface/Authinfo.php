<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Authinfo
{
    /**
     * 获取authinfo接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html
     */
    public function post(array $options = [
        'json' => [
            'sp_appid' => '',
            'sub_appid' => '',
            'sub_mchid' => '',
            'device_id' => '',
            'raw_data' => '',
            'organization_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 获取authinfo接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_appid' => '',
            'sub_appid' => '',
            'sub_mchid' => '',
            'device_id' => '',
            'raw_data' => '',
            'organization_id' => '',
        ],
    ]): PromiseInterface;
}
