<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Goldplan\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CloseAdvertisingShow
{
    /**
     * 关闭广告展示(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/close-advertising-show
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 关闭广告展示(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/close-advertising-show
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
