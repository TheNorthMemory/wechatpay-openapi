<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantRiskManage;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ViolationNotifications
{
    /**
     * 创建商户违规通知回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 创建商户违规通知回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;

    /**
     * 查询商户违规通知回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_2.shtml
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 查询商户违规通知回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_2.shtml#async
     */
    public function getAsync(array $options = []): PromiseInterface;

    /**
     * 修改商户违规通知回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_3.shtml
     */
    public function put(array $options = [
        'json' => [
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 修改商户违规通知回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_3.shtml#async
     */
    public function putAsync(array $options = [
        'json' => [
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;

    /**
     * 删除商户违规通知回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_4.shtml
     */
    public function delete(array $options = []): ResponseInterface;

    /**
     * 删除商户违规通知回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_3_4.shtml#async
     */
    public function deleteAsync(array $options = []): PromiseInterface;
}
