<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Transit\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querystate
{
    /**
     * 查询用户状态接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap_jt_v2.php?chapter=19_96&index=12
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'contract_id' => 'wx15463511252015071056489715',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户状态接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap_jt_v2.php?chapter=19_96&index=12#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'contract_id' => 'wx15463511252015071056489715',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
