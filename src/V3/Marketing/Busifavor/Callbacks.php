<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Callbacks
{
    /**
     * 设置商家券事件通知地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_7.shtml
     */
    public function post(array $options = [
        'json' => [
            'mchid' => '10000098',
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 设置商家券事件通知地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_7.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'mchid' => '10000098',
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): PromiseInterface;

    /**
     * 查询商家券事件通知地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_8.shtml
     */
    public function get(array $options = [
        'query' => [
            'mchid' => '10000098',
        ],
    ]): ResponseInterface;

    /**
     * 查询商家券事件通知地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_8.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'mchid' => '10000098',
        ],
    ]): PromiseInterface;
}
