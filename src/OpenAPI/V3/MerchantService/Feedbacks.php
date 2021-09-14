<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Feedbacks
{
    /**
     * 商户反馈(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2021.01.08
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_6.shtml
     */
    public function post(array $options = [
        'json' => [
            'transaction_id' => '',
            'complainted_mchid' => '',
            'feedback_type' => 0,
            'feedback_content' => '',
            'feedback_images' => [],
            'launch_confirm_process' => '',
        ],
    ]): ResponseInterface;

    /**
     * 商户反馈(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2021.01.08
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter3_6.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'transaction_id' => '',
            'complainted_mchid' => '',
            'feedback_type' => 0,
            'feedback_content' => '',
            'feedback_images' => [],
            'launch_confirm_process' => '',
        ],
    ]): PromiseInterface;
}
