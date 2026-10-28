<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\Account\Close\Result;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notify
{
    /**
     * 微众注销及解管完成通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/account/close/result/notify
     */
    public function post(array $options = [
        'json' => [
            'mchid' => '1900016681',
            'platform_trx_id' => '11117742499090086455469010028373',
            'result' => 'SUCCESS',
            'finish_time' => '2015-05-20T13:29:35+08:00',
            'bal_account_no' => 'Cf80Dpbwo2cexDDB2k5W/DZyefMg8nCvBgty1OCebYcg',
            'card_no' => 'FMbf1tn2F0NRYCJp1BW76oVoMuzBL00kPke7D',
            'sgn_no' => '20240520153000001234',
            'req_scene' => 'SJT_CONVENIENT_SETTLEMENT_SERVICE_MERCHANT | SJT_MICRO_MERCHANT | WX_SHOP_CONVENIENT_SETTLEMENT_SERVICE_MERCHANT',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 微众注销及解管完成通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/account/close/result/notify
     */
    public function postAsync(array $options = [
        'json' => [
            'mchid' => '1900016681',
            'platform_trx_id' => '11117742499090086455469010028373',
            'result' => 'SUCCESS',
            'finish_time' => '2015-05-20T13:29:35+08:00',
            'bal_account_no' => 'Cf80Dpbwo2cexDDB2k5W/DZyefMg8nCvBgty1OCebYcg',
            'card_no' => 'FMbf1tn2F0NRYCJp1BW76oVoMuzBL00kPke7D',
            'sgn_no' => '20240520153000001234',
            'req_scene' => 'SJT_CONVENIENT_SETTLEMENT_SERVICE_MERCHANT | SJT_MICRO_MERCHANT | WX_SHOP_CONVENIENT_SETTLEMENT_SERVICE_MERCHANT',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
