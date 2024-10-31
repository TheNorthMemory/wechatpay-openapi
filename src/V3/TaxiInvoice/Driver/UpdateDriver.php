<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\Driver;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UpdateDriver
{
    /**
     * 更新司机信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/driver/update-driver.html
     */
    public function post(array $options = [
        'json' => [
            'driver_name' => 'OpldWegML3fJ3/U5L6av0bU6GcIOaOhi+SY04APUv4dfFrD7US5TWiL5sVnQSz/wvsvQ==',
            'id_card_number' => 'OpldWegML3fJ3/U5L6av0bU6GcIOaOhXM/t2DrNLxVUb77DCnz421UAD7US5TWiL5sVnQSz/wvsvQ==',
            'company_name' => '深圳市未来有限公司',
            'mchid' => '1900000109',
            'driver_license' => '6298416',
            'driver_category' => 'MAIN',
            'driver_status' => 'ON_DUTY',
            'driver_photo' => [
                'photo_type' => 'PHOTO_URL',
                'photo_digest' => [
                    'hash_type' => 'MD5',
                    'hash_value' => 'e10adc3949ba59abbe56e057f20f883e',
                ],
                'photo_url' => 'http://www.abc.com/driver.icon',
                'photo_icon' => 'Pm+zC+kaOSdRmVQP7pPQ++Ky9C8FaVp8El2sLT3b/M887b3YnrknrmiiumOkNDklrUdznfitoFkPC94vlnbbESwgn7hBXge3JFHw80S0l8J2jSIZN8PnMrHIZiWPI74xwKKK35n9X3+1+hzKK+t7fZ/U9Bg8P2L2ixmBdpTaRjtivPdOt28P3THTp5rXkjCNwRnoRjB/GiisYHRPc7WHV7jWvC32m42+ctyqZQYBx3I9a6GZisqMOCZXP4+STRRXMzqiZPmv8A3jRRRUFH/9k=',
            ],
            'region_id' => 510100,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 更新司机信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/driver/update-driver.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'driver_name' => 'OpldWegML3fJ3/U5L6av0bU6GcIOaOhi+SY04APUv4dfFrD7US5TWiL5sVnQSz/wvsvQ==',
            'id_card_number' => 'OpldWegML3fJ3/U5L6av0bU6GcIOaOhXM/t2DrNLxVUb77DCnz421UAD7US5TWiL5sVnQSz/wvsvQ==',
            'company_name' => '深圳市未来有限公司',
            'mchid' => '1900000109',
            'driver_license' => '6298416',
            'driver_category' => 'MAIN',
            'driver_status' => 'ON_DUTY',
            'driver_photo' => [
                'photo_type' => 'PHOTO_URL',
                'photo_digest' => [
                    'hash_type' => 'MD5',
                    'hash_value' => 'e10adc3949ba59abbe56e057f20f883e',
                ],
                'photo_url' => 'http://www.abc.com/driver.icon',
                'photo_icon' => 'Pm+zC+kaOSdRmVQP7pPQ++Ky9C8FaVp8El2sLT3b/M887b3YnrknrmiiumOkNDklrUdznfitoFkPC94vlnbbESwgn7hBXge3JFHw80S0l8J2jSIZN8PnMrHIZiWPI74xwKKK35n9X3+1+hzKK+t7fZ/U9Bg8P2L2ixmBdpTaRjtivPdOt28P3THTp5rXkjCNwRnoRjB/GiisYHRPc7WHV7jWvC32m42+ctyqZQYBx3I9a6GZisqMOCZXP4+STRRXMzqiZPmv8A3jRRRUFH/9k=',
            ],
            'region_id' => 510100,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
