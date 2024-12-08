<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querysubdevconfig
{
    /**
     * 配置查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/querysubdevconfig
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 配置查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/querysubdevconfig
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}
