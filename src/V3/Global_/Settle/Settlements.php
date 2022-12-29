<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Settle;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Settlements
{
    /**
     * 查询结算资金明细(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter3_1_10.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
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
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter3_1_10.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
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
