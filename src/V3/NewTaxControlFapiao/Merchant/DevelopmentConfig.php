<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Merchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface DevelopmentConfig
{
    /**
     * 配置开发选项(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter4_8_18.shtml
     */
    public function patch(array $options = [
        'json' => [
            'callback_url' => 'https://pay.weixin.qq.com/callback',
        ],
    ]): ResponseInterface;

    /**
     * 配置开发选项(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter4_8_18.shtml#async
     */
    public function patchAsync(array $options = [
        'json' => [
            'callback_url' => 'https://pay.weixin.qq.com/callback',
        ],
    ]): PromiseInterface;

    /**
     * 查询商户配置的开发选项(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter4_8_19.shtml
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 查询商户配置的开发选项(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter4_8_19.shtml#async
     */
    public function getAsync(array $options = []): PromiseInterface;
}
