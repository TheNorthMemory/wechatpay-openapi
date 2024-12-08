<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Goldplan\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Changegoldplanstatus
{
    /**
     * 点金计划管理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/changegoldplanstatus
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1234567890',
            'operation_type' => 'OPEN | CLOSE',
        ],
    ]): ResponseInterface;

    /**
     * 点金计划管理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/changegoldplanstatus
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1234567890',
            'operation_type' => 'OPEN | CLOSE',
        ],
    ]): PromiseInterface;
}
