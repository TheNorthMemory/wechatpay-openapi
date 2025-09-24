<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\ControlOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Recover
{
    /**
     * 解除对微众台账的管控(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/recover
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => 'example_out_request_no',
            'related_webank_punish_no' => 'example_related_webank_punish_no',
            'related_wxpay_punish_no' => 'example_related_wxpay_punish_no',
            'mchid' => 'example_mchid',
            'bal_account_no' => 'example_bal_account_no',
            'recover_reason' => 'example_recover_reason',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 解除对微众台账的管控(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/recover
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => 'example_out_request_no',
            'related_webank_punish_no' => 'example_related_webank_punish_no',
            'related_wxpay_punish_no' => 'example_related_wxpay_punish_no',
            'mchid' => 'example_mchid',
            'bal_account_no' => 'example_bal_account_no',
            'recover_reason' => 'example_recover_reason',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
