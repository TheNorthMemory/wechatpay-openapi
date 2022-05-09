<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface UpdateRefundProgress
{
    /**
     * 更新退款进度(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter10_2_19.shtml
     */
    public function post(array $options = [
        'json' => [
            'complaint_id' => '200201820200101080076610000',
            'action' => 'APPROVE',
            'launch_refund_day' => 3,
            'reject_reason' => '拒绝退款',
            'reject_media_list' => ['MediaId'],
            'remark' => '已处理完成',
        ],
    ]): ResponseInterface;

    /**
     * 更新退款进度(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter10_2_19.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'complaint_id' => '200201820200101080076610000',
            'action' => 'APPROVE',
            'launch_refund_day' => 3,
            'reject_reason' => '拒绝退款',
            'reject_media_list' => ['MediaId'],
            'remark' => '已处理完成',
        ],
    ]): PromiseInterface;
}
