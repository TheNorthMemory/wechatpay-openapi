<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Settle;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Settlements
{
    /**
     * 查询结算资金明细(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/settle/settlements
     */
    public function get(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'query' => [
            'sub_mchid' => '1900000101',
            'settle_state' => 'SETTLED',
            'settle_start_date' => '20091225',
            'settle_end_date' => '20091226',
            'limit' => 5,
            'offset' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询结算资金明细(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/settle/settlements
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'query' => [
            'sub_mchid' => '1900000101',
            'settle_state' => 'SETTLED',
            'settle_start_date' => '20091225',
            'settle_end_date' => '20091226',
            'limit' => 5,
            'offset' => 10,
        ],
    ]): PromiseInterface;
}
