<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Face;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Get_wxpayface_authinfo
{
    /**
     * 人脸识别SDK-获取调用凭证(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/android/faceuser.html
     */
    public function post(array $options = [
        'xml' => [
            'store_id' => 'IMG001',
            'store_name' => '爱马哥南山店',
            'device_id' => 'DEV001',
            'attach' => '',
            'rawdata' => 'H0kvnUgGHKuqflNwtNqCdOVpbO4FPSowudTG',
            'appid' => 'wx31fdaErqR31',
            'mch_id' => '12345689',
            'sub_appid' => 'wx31fdaErqR31',
            'sub_mch_id' => '12345689',
            'now' => '1239878956',
            'version' => '1',
            'sign_type' => 'MD5',
        ],
        'base_uri' => 'https://payapp.weixin.qq.com/',
    ]): ResponseInterface;

    /**
     * 人脸识别SDK-获取调用凭证(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/android/faceuser.html#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'store_id' => 'IMG001',
            'store_name' => '爱马哥南山店',
            'device_id' => 'DEV001',
            'attach' => '',
            'rawdata' => 'H0kvnUgGHKuqflNwtNqCdOVpbO4FPSowudTG',
            'appid' => 'wx31fdaErqR31',
            'mch_id' => '12345689',
            'sub_appid' => 'wx31fdaErqR31',
            'sub_mch_id' => '12345689',
            'now' => '1239878956',
            'version' => '1',
            'sign_type' => 'MD5',
        ],
        'base_uri' => 'https://payapp.weixin.qq.com/',
    ]): PromiseInterface;
}
