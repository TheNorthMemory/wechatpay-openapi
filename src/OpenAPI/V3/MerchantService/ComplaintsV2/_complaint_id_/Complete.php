<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Complete
{
    /**
     * 反馈处理完成(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_2_15.shtml
     */
    public function post(array $options = [
        'complaint_id' => '',
        'json' => [
            'complainted_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 反馈处理完成(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_2_15.shtml#async
     */
    public function postAsync(array $options = [
        'complaint_id' => '',
        'json' => [
            'complainted_mchid' => '',
        ],
    ]): PromiseInterface;
}
