<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PermissionTokens
{
    /**
     * 商户预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_7.shtml
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'activate_type' => 'AUTO_ACTIVATE',
            'navigate_back_previous_page' => true,
            'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
            'activate_appid' => 'wxea9c30a90fs8d3fe',
            'activate_path' => 'pages/activate/activate',
            'outer_str' => 'szwxtd',
        ],
    ]): ResponseInterface;

    /**
     * 商户预授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_7.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'activate_type' => 'AUTO_ACTIVATE',
            'navigate_back_previous_page' => true,
            'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
            'activate_appid' => 'wxea9c30a90fs8d3fe',
            'activate_path' => 'pages/activate/activate',
            'outer_str' => 'szwxtd',
        ],
    ]): PromiseInterface;
}
