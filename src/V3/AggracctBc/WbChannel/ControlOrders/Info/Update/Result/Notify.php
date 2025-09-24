<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\ControlOrders\Info\Update\Result;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notify
{
    /**
     * 资料更新请求审核结果回调通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/info/update/result/notify
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
            'mchid' => '1900016681',
            'audit_result' => 'PASS',
            'audit_finish_time' => '2015-05-20T13:29:35+08:00',
            'attach_info' => 'updateidcard',
            'fail_code' => '1001',
            'fail_msg' => 'IDCARD_ILLEGAL',
        ],
    ]): ResponseInterface;

    /**
     * 资料更新请求审核结果回调通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/info/update/result/notify
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
            'mchid' => '1900016681',
            'audit_result' => 'PASS',
            'audit_finish_time' => '2015-05-20T13:29:35+08:00',
            'attach_info' => 'updateidcard',
            'fail_code' => '1001',
            'fail_msg' => 'IDCARD_ILLEGAL',
        ],
    ]): PromiseInterface;
}
