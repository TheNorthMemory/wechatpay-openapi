<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Response
{
    /**
     * 提交回复(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_2_14.shtml
     */
    public function post(array $options = [
        'json' => [
            'complaint_id' => '200201820200101080076610000',
            'complainted_mchid' => '1900012181',
            'response_content' => '已与用户沟通解决',
            'response_images' => [],
        ],
    ]): ResponseInterface;

    /**
     * 提交回复(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_2_14.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'complaint_id' => '200201820200101080076610000',
            'complainted_mchid' => '1900012181',
            'response_content' => '已与用户沟通解决',
            'response_images' => [],
        ],
    ]): PromiseInterface;
}
