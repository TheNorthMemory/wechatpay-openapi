<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Papay\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Terminate
{
    /**
     * 申请解约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_4.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'contract_id' => '100005698',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sp_appid' => 'wx8888888888888888',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxcbda96de0b165484',
            'termination_note' => '解约原因',
        ],
    ]): ResponseInterface;

    /**
     * 申请解约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_4.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'contract_id' => '100005698',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sp_appid' => 'wx8888888888888888',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxcbda96de0b165484',
            'termination_note' => '解约原因',
        ],
    ]): PromiseInterface;
}
