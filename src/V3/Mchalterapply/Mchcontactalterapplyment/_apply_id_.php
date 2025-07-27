<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply\Mchcontactalterapplyment;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _apply_id_\Revoke $revoke
 */
interface _apply_id_
{
    /**
     * 查询超管变更申请单状态-使用申请单号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchcontactalterapplyment/%7Bapply_id%7D
     */
    public function get(array $options = [
        'apply_id' => '20220617143306000013906025001',
    ]): ResponseInterface;

    /**
     * 查询超管变更申请单状态-使用申请单号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchcontactalterapplyment/%7Bapply_id%7D
     */
    public function getAsync(array $options = [
        'apply_id' => '20220617143306000013906025001',
    ]): PromiseInterface;
}
