<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UpdateRefundProgress
{
    /**
     * 更新退款审批结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter10_2_19.shtml
     */
    public function post(array $options = [
        'json' => [
            'complaint_id' => '200201820200101080076610000',
            'action' => 'REJECT | APPROVE',
            'launch_refund_day' => 3,
            'reject_reason' => '拒绝退款',
            'reject_media_list' => ['MediaId'],
            'remark' => '已处理完成',
        ],
    ]): ResponseInterface;

    /**
     * 更新退款审批结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter10_2_19.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'complaint_id' => '200201820200101080076610000',
            'action' => 'REJECT | APPROVE',
            'launch_refund_day' => 3,
            'reject_reason' => '拒绝退款',
            'reject_media_list' => ['MediaId'],
            'remark' => '已处理完成',
        ],
    ]): PromiseInterface;
}
