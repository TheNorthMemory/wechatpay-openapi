<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Complete
{
    /**
     * 反馈处理完成(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/complete
     */
    public function post(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
        ],
    ]): ResponseInterface;

    /**
     * 反馈处理完成(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/complete
     */
    public function postAsync(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
        ],
    ]): PromiseInterface;
}
