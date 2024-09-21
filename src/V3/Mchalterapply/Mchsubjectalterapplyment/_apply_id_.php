<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply\Mchsubjectalterapplyment;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _apply_id_\Revoke $revoke
 */
interface _apply_id_
{
    /**
     * 查询资料变更申请单状态-使用申请单号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_3_2.shtml
     */
    public function get(array $options = [
        'apply_id' => '20220617143306000013906025001',
    ]): ResponseInterface;

    /**
     * 查询资料变更申请单状态-使用申请单号(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_3_2.shtml#async
     */
    public function getAsync(array $options = [
        'apply_id' => '20220617143306000013906025001',
    ]): PromiseInterface;
}
