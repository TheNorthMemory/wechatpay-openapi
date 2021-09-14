<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Profitsharing\Receivers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Delete
{
    /**
     * 删除分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/brand/chapter3_8.shtml
     */
    public function post(array $options = [
        'json' => [
            'brand_mchid' => '',
            'appid' => '',
            'sub_appid' => '',
            'type' => '',
            'account' => '',
        ],
    ]): ResponseInterface;

    /**
     * 删除分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/brand/chapter3_8.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_mchid' => '',
            'appid' => '',
            'sub_appid' => '',
            'type' => '',
            'account' => '',
        ],
    ]): PromiseInterface;
}
