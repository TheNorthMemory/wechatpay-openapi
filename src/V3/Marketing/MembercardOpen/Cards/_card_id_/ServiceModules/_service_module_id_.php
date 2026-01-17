<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\ServiceModules;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _service_module_id_
{
    /**
     * 修改会员卡服务项(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/service-modules/%7Bservice_module_id%7D
     */
    public function patch(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'service_module_id' => '666',
        'json' => [
            'jump_miniprogram' => [
                'appid' => 'wx37178d097a6851d8',
                'path' => 'pages/index/index',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 修改会员卡服务项(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/service-modules/%7Bservice_module_id%7D
     */
    public function patchAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'service_module_id' => '666',
        'json' => [
            'jump_miniprogram' => [
                'appid' => 'wx37178d097a6851d8',
                'path' => 'pages/index/index',
            ],
        ],
    ]): PromiseInterface;

    /**
     * 移除会员卡服务项(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/service-modules/%7Bservice_module_id%7D#delete
     */
    public function delete(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'service_module_id' => '666',
    ]): ResponseInterface;

    /**
     * 移除会员卡服务项(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/service-modules/%7Bservice_module_id%7D#delete
     */
    public function deleteAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'service_module_id' => '666',
    ]): PromiseInterface;
}
