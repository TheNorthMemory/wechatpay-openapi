<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface ComplaintNotifications
{
    /**
     * 创建投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_2.shtml
     */
    public function post(array $options = [
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): ResponseInterface;

    /**
     * 创建投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): PromiseInterface;

    /**
     * 查询投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_3.shtml
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 查询投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_3.shtml#async
     */
    public function getAsync(array $options = []): PromiseInterface;

    /**
     * 更新投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_4.shtml
     */
    public function put(array $options = [
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): ResponseInterface;

    /**
     * 更新投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_4.shtml#async
     */
    public function putAsync(array $options = [
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): PromiseInterface;

    /**
     * 删除投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_5.shtml
     */
    public function delete(array $options = []): ResponseInterface;

    /**
     * 删除投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_5.shtml#async
     */
    public function deleteAsync(array $options = []): PromiseInterface;
}
