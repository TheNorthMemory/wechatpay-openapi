<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account\CancelApplications\OutApplyNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_apply_no_
{
    /**
     * 查询注销单状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-cancel/cancel-applications/get-cancel-application.html
     */
    public function get(array $options = [
        'out_apply_no' => '2019061122222222122',
    ]): ResponseInterface;

    /**
     * 查询注销单状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-cancel/cancel-applications/get-cancel-application.html#async
     */
    public function getAsync(array $options = [
        'out_apply_no' => '2019061122222222122',
    ]): PromiseInterface;
}
