<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantService;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ComplaintNotifications
{
    /**
     * 创建投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): ResponseInterface;

    /**
     * 创建投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): PromiseInterface;

    /**
     * 查询投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications#get
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
    ]): ResponseInterface;

    /**
     * 查询投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications#get
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
    ]): PromiseInterface;

    /**
     * 更新投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications#put
     */
    public function put(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): ResponseInterface;

    /**
     * 更新投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications#put
     */
    public function putAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'url' => 'https://www.xxx.com/notify',
        ],
    ]): PromiseInterface;

    /**
     * 删除投诉通知回调(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications#delete
     */
    public function delete(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
    ]): ResponseInterface;

    /**
     * 删除投诉通知回调(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaint-notifications#delete
     */
    public function deleteAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
    ]): PromiseInterface;
}
