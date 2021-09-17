<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Qrcode
{
    /**
     * 创建会员卡二维码(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_3.shtml
     */
    public function post(array $options = [
        'card_id' => '',
        'json' => [
            'activate_type' => '',
            'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
            'activate_appid' => 'wxea9c30a90fs8d3fe',
            'activate_path' => 'pages/activate/activate',
            'outer_str' => 'szwxtd',
        ],
    ]): ResponseInterface;

    /**
     * 创建会员卡二维码(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_3.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => '',
        'json' => [
            'activate_type' => '',
            'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
            'activate_appid' => 'wxea9c30a90fs8d3fe',
            'activate_path' => 'pages/activate/activate',
            'outer_str' => 'szwxtd',
        ],
    ]): PromiseInterface;
}
