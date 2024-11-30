<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Paporderquery
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_10&index=14
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'sub_appid' => '',
            'sub_mch_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_10&index=14#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'sub_appid' => '',
            'sub_mch_id' => '',
        ],
    ]): PromiseInterface;
}
