<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read ImageGenerationTasks\_task_id_ $_task_id_
 */
interface ImageGenerationTasks
{
    /**
     * 提交图片生成任务(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/image-generation-tasks
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => '120344',
            'task_id' => 'image_generation_task_1',
            'image_generation_type' => 'COMBINE_IMAGE',
            'combine_image' => [
                'scope' => 'ALL',
                'type' => 'NORMAL',
                'usage_mode' => 'SINGLE',
                'normal_coupon' => [
                    'threshold' => 10000,
                    'discount_amount' => 1,
                ],
                'discount_coupon' => [
                    'threshold' => 10000,
                    'percent_off' => 20,
                ],
                'exchange_coupon' => [
                    'threshold' => 10000,
                    'exchange_price' => 20,
                ],
                'background_color' => '#ff5733',
            ],
            'cut_out' => [
                'image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/example.jpg',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 提交图片生成任务(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/image-generation-tasks
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => '120344',
            'task_id' => 'image_generation_task_1',
            'image_generation_type' => 'COMBINE_IMAGE',
            'combine_image' => [
                'scope' => 'ALL',
                'type' => 'NORMAL',
                'usage_mode' => 'SINGLE',
                'normal_coupon' => [
                    'threshold' => 10000,
                    'discount_amount' => 1,
                ],
                'discount_coupon' => [
                    'threshold' => 10000,
                    'percent_off' => 20,
                ],
                'exchange_coupon' => [
                    'threshold' => 10000,
                    'exchange_price' => 20,
                ],
                'background_color' => '#ff5733',
            ],
            'cut_out' => [
                'image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/example.jpg',
            ],
        ],
    ]): PromiseInterface;
}
