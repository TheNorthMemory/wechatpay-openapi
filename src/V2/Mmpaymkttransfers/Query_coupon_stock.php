<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Query_coupon_stock
{
    /**
     * 查询代金券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/sp_coupon.php?chapter=12_4&index=5
     */
    public function post(array $options = [
        'xml' => [
            'coupon_stock_id' => '1757',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'op_user_id' => '10000098',
            'device_info' => '',
            'version' => '1.0',
            'type' => 'XML',
        ],
    ]): ResponseInterface;

    /**
     * 查询代金券批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/sp_coupon.php?chapter=12_4&index=5#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'coupon_stock_id' => '1757',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'op_user_id' => '10000098',
            'device_info' => '',
            'version' => '1.0',
            'type' => 'XML',
        ],
    ]): PromiseInterface;
}
