<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface FailNotify
{
    /**
     * 重试扣费通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter3_11.shtml
     */
    public function post(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'mchid' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
        ],
    ]): ResponseInterface;

    /**
     * 重试扣费通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter3_11.shtml#async
     */
    public function postAsync(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'mchid' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
        ],
    ]): PromiseInterface;
}
