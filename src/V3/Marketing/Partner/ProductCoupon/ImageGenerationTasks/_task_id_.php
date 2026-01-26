<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ImageGenerationTasks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _task_id_
{
    /**
     * 查询图片生成任务执行结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/image-generation-tasks/%7Btask_id%7D
     */
    public function get(array $options = [
        'task_id' => 'image_generation_task_1',
        'query' => [
            'brand_id' => '120344',
            'image_generation_type' => 'COMBINE_IMAGE',
        ],
    ]): ResponseInterface;

    /**
     * 查询图片生成任务执行结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/image-generation-tasks/%7Btask_id%7D
     */
    public function getAsync(array $options = [
        'task_id' => 'image_generation_task_1',
        'query' => [
            'brand_id' => '120344',
            'image_generation_type' => 'COMBINE_IMAGE',
        ],
    ]): PromiseInterface;
}
