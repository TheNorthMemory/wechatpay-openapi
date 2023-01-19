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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_6.shtml
     */
    public function post(array $options = [
        'contract_id' => 'wx8888888888888888',
        'json' => [
            'appid' => 'wx8888888888888888',
        ],
    ]): ResponseInterface;

    /**
     * 发送扣款预通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_6.shtml#async
     */
    public function postAsync(array $options = [
        'contract_id' => 'wx8888888888888888',
        'json' => [
            'appid' => 'wx8888888888888888',
        ],
    ]): PromiseInterface;
}
