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
            'transaction_id' => '4200000404201909069117582536',
            'complainted_mchid' => '9980456248',
            'feedback_type' => 1,
            'feedback_content' => '已与用户协商解决',
            'feedback_images' => ['MediaId'],
            'launch_confirm_process' => true,
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
            'transaction_id' => '4200000404201909069117582536',
            'complainted_mchid' => '9980456248',
            'feedback_type' => 1,
            'feedback_content' => '已与用户协商解决',
            'feedback_images' => ['MediaId'],
            'launch_confirm_process' => true,
        ],
    ]): PromiseInterface;
}
