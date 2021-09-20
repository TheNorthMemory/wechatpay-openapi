<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Deposit;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Orderquery
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/deposit_sl.php?chapter=27_2&index=3
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1230000109',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '1009660380201506130728806387',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/deposit_sl.php?chapter=27_2&index=3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1230000109',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '1009660380201506130728806387',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
