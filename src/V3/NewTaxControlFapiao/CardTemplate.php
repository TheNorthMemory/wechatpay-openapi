<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CardTemplate
{
    /**
     * 创建电子发票卡券模板(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/card-template
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'card_appid' => 'wxb1170446a4c0a5a2',
            'card_template_information' => [
                'payee_name' => '某公司',
                'logo_url' => 'http://mmbiz.qpic.cn/mmbiz/iaL1LJM1mF9aRKPZJkmG8xXhiaHqkKSVMMWeN3hLut7X7hicFNjakmxibMLGWpXrEXB33367o7zHN0CwngnQY7zb7g/0',
                'custom_cell' => [
                    'words' => '电子发票',
                    'description' => '查看发票',
                    'jump_url' => 'http://www.qq.com',
                    'miniprogram_user_name' => 'gh_86a091e50ad4@app',
                    'miniprogram_path' => 'pages/xxxPage',
                ],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 创建电子发票卡券模板(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/card-template
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'card_appid' => 'wxb1170446a4c0a5a2',
            'card_template_information' => [
                'payee_name' => '某公司',
                'logo_url' => 'http://mmbiz.qpic.cn/mmbiz/iaL1LJM1mF9aRKPZJkmG8xXhiaHqkKSVMMWeN3hLut7X7hicFNjakmxibMLGWpXrEXB33367o7zHN0CwngnQY7zb7g/0',
                'custom_cell' => [
                    'words' => '电子发票',
                    'description' => '查看发票',
                    'jump_url' => 'http://www.qq.com',
                    'miniprogram_user_name' => 'gh_86a091e50ad4@app',
                    'miniprogram_path' => 'pages/xxxPage',
                ],
            ],
        ],
    ]): PromiseInterface;
}
