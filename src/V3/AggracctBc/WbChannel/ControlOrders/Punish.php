<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\ControlOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Punish
{
    /**
     * 发起微众台账管控(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/punish
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => 'example_out_request_no',
            'mchid' => 'example_mchid',
            'bal_account_no' => 'example_bal_account_no',
            'punish_scene' => 1,
            'punish_reason' => 'example_punish_reason',
            'punish_end_time' => '2015-05-20T13:29:35+08:00',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 发起微众台账管控(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/punish
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => 'example_out_request_no',
            'mchid' => 'example_mchid',
            'bal_account_no' => 'example_bal_account_no',
            'punish_scene' => 1,
            'punish_reason' => 'example_punish_reason',
            'punish_end_time' => '2015-05-20T13:29:35+08:00',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
