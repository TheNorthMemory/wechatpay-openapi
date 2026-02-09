<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantService\Complaints\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Complete
{
    /**
     * 反馈处理完成(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints/%7Bcomplaint_id%7D/complete
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
        ],
    ]): ResponseInterface;

    /**
     * 反馈处理完成(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints/%7Bcomplaint_id%7D/complete
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
        ],
    ]): PromiseInterface;
}
