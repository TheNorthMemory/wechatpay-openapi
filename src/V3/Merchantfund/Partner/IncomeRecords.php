<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchantfund\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface IncomeRecords
{
    /**
     * 特约商户银行来账查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter3_6.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '2480253391',
            'account_type' => 'BASIC',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 特约商户银行来账查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter3_6.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '2480253391',
            'account_type' => 'BASIC',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): PromiseInterface;
}
