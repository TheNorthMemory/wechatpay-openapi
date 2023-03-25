<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4sub\Sub_merchants\_sub_mchid_\Application;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _application_no_
{
    /**
     * 查询结算账户修改申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/modify-settlement/sub-merchants/get-application.html
     */
    public function get(array $options = [
        'sub_mchid' => '1511101111',
        'application_no' => '102329389XXXX',
    ]): ResponseInterface;

    /**
     * 查询结算账户修改申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/modify-settlement/sub-merchants/get-application.html#async
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1511101111',
        'application_no' => '102329389XXXX',
    ]): PromiseInterface;
}
