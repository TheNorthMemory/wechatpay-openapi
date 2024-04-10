<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AfterSalesOrders
{
    /**
     * 请求售后服务分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/products/ecommerce/introduction.html
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '3008450740201411110007820472',
            'amount' => 10,
            'type' => 'SERVICE_FEE_INCOME',
            'scene' => 'REFUND_TICKET | CHANGE_TICKET | RETURN_GOODS',
            'refund_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 请求售后服务分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/products/ecommerce/introduction.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '3008450740201411110007820472',
            'amount' => 10,
            'type' => 'SERVICE_FEE_INCOME',
            'scene' => 'REFUND_TICKET | CHANGE_TICKET | RETURN_GOODS',
            'refund_id' => '',
        ],
    ]): PromiseInterface;

    /**
     * 查询售后服务分账结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/products/ecommerce/introduction.html
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询售后服务分账结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/products/ecommerce/introduction.html#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
        ],
    ]): PromiseInterface;
}
