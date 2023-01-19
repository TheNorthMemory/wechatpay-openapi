<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Presign
{
    /**
     * 预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plan_id' => '101164396123311331',
            'user_id' => '20200330tony',
            'period_start_date' => '2020-03-19',
            'trade_scene' => 'EDUCATION_PERIOD',
        ],
    ]): ResponseInterface;

    /**
     * 预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plan_id' => '101164396123311331',
            'user_id' => '20200330tony',
            'period_start_date' => '2020-03-19',
            'trade_scene' => 'EDUCATION_PERIOD',
        ],
    ]): PromiseInterface;
}
