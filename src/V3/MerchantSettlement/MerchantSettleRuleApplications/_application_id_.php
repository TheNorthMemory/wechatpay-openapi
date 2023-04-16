<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantSettlement\MerchantSettleRuleApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _application_id_
{
    /**
     * 根据申请单ID查询结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_1_2.shtml
     */
    public function get(array $options = [
        'application_id' => '20000011111',
    ]): ResponseInterface;

    /**
     * 根据申请单ID查询结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_1_2.shtml#async
     */
    public function getAsync(array $options = [
        'application_id' => '20000011111',
    ]): PromiseInterface;
}
