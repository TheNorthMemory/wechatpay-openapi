<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay\UserNotifications\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Send
{
    /**
     * 发送扣款预通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-papay/user-notifications/%7Bcontract_id%7D/send
     */
    public function post(array $options = [
        'contract_id' => 'wx8888888888888888',
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
        ],
    ]): ResponseInterface;

    /**
     * 发送扣款预通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-papay/user-notifications/%7Bcontract_id%7D/send
     */
    public function postAsync(array $options = [
        'contract_id' => 'wx8888888888888888',
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
        ],
    ]): PromiseInterface;
}
