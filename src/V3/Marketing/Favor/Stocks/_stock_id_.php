<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _stock_id_\Items $items
 * @property-read _stock_id_\Merchants $merchants
 * @property-read _stock_id_\Pause $pause
 * @property-read _stock_id_\RefundFlow $refundFlow
 * @property-read _stock_id_\Restart $restart
 * @property-read _stock_id_\Start $start
 * @property-read _stock_id_\UseFlow $useFlow
 */
interface _stock_id_
{
    /**
     * 查询批次详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_5.shtml
     */
    public function get(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询批次详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
        ],
    ]): PromiseInterface;
}
