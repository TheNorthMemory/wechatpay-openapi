<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Response
{
    /**
     * 提交回复(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/response
     */
    public function post(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
            'response_content' => '已与用户沟通解决',
            'response_images' => ['file23578_21798531.jpg'],
            'jump_url' => 'https://www.xxx.com/notify',
            'jump_url_text' => '查看订单详情',
            'mini_program_jump_info' => [
                'appid' => 'example_appid',
                'path' => 'example_path',
                'text' => 'example_text',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 提交回复(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/response
     */
    public function postAsync(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
            'response_content' => '已与用户沟通解决',
            'response_images' => ['file23578_21798531.jpg'],
            'jump_url' => 'https://www.xxx.com/notify',
            'jump_url_text' => '查看订单详情',
            'mini_program_jump_info' => [
                'appid' => 'example_appid',
                'path' => 'example_path',
                'text' => 'example_text',
            ],
        ],
    ]): PromiseInterface;
}
