<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read ServiceModules\_service_module_id_ $_service_module_id_
 */
interface ServiceModules
{
    /**
     * 添加会员卡服务项(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/service-modules
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'service_module_id' => '666',
            'jump_miniprogram' => [
                'appid' => 'wx37178d097a6851d8',
                'path' => 'pages/index/index',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 添加会员卡服务项(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/service-modules
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'service_module_id' => '666',
            'jump_miniprogram' => [
                'appid' => 'wx37178d097a6851d8',
                'path' => 'pages/index/index',
            ],
        ],
    ]): PromiseInterface;
}
