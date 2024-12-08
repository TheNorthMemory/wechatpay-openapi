<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Qrcode
{
    /**
     * 创建会员卡二维码(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/qrcode
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'activate_type' => 'AUTO_ACTIVATE | JUMP_ACTIVATE',
            'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
            'activate_appid' => 'wxea9c30a90fs8d3fe',
            'activate_path' => 'pages/activate/activate',
            'outer_str' => 'szwxtd',
        ],
    ]): ResponseInterface;

    /**
     * 创建会员卡二维码(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/qrcode
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'activate_type' => 'AUTO_ACTIVATE | JUMP_ACTIVATE',
            'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
            'activate_appid' => 'wxea9c30a90fs8d3fe',
            'activate_path' => 'pages/activate/activate',
            'outer_str' => 'szwxtd',
        ],
    ]): PromiseInterface;
}
