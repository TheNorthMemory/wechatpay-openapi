<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\BankFavor\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface BankMultiActivity
{
    /**
     * 给指定用户报名多笔立减活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank-favor/users/%7Bopenid%7D/bank-multi-activity
     */
    public function post(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'json' => [
            'stock_id' => '100088',
            'activity_id' => '186745560',
            'out_request_no' => '1002600620019090123143254435',
            'appid' => 'wx1234567889999',
            'stock_creator_mchid' => '9800064',
        ],
    ]): ResponseInterface;

    /**
     * 给指定用户报名多笔立减活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank-favor/users/%7Bopenid%7D/bank-multi-activity
     */
    public function postAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'json' => [
            'stock_id' => '100088',
            'activity_id' => '186745560',
            'out_request_no' => '1002600620019090123143254435',
            'appid' => 'wx1234567889999',
            'stock_creator_mchid' => '9800064',
        ],
    ]): PromiseInterface;
}
