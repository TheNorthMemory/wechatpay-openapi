<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Merchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
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
            'sub_mch_code' => '1900000109',
            'show_fapiao_cell' => true,
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
            'sub_mch_code' => '1900000109',
            'show_fapiao_cell' => true,
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
