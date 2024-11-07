<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querycouponsinfo
{
    /**
     * 查询代金券信息(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.MM.dd
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/sp_coupon.php?chapter=12_5&index=6
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
     * 查询代金券信息(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.MM.dd
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/sp_coupon.php?chapter=12_5&index=6#async
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
