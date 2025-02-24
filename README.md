# 微信支付OpenAPI

整理自[官方文档中心](https://pay.weixin.qq.com/wiki/doc/apiv3/index.shtml)

[![GitHub actions](https://github.com/TheNorthMemory/wechatpay-openapi/workflows/CI/badge.svg)](https://github.com/TheNorthMemory/wechatpay-openapi/actions)
[![Packagist Stars](https://img.shields.io/packagist/stars/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist Downloads](https://img.shields.io/packagist/dm/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist Version](https://img.shields.io/packagist/v/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist License](https://img.shields.io/packagist/l/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)

## 业务标签

| 名称 | 直连模式 | 服务商模式 |
| --- | :---: | :---: |
| 基础支付 | ✔️ | |
| 基础支付∙服务商模式 | | ✔️ |
| 基础支付∙合单 | | ✔️ |
| 基础支付∙账单 | ✔️ | ✔️ |
| 基础支付∙退款 | ✔️ | ✔️ |
| 刷脸支付 | | ✔️ |
| 免密支付 | ✔️ | ✔️ |
| 资金应用∙分账 | | ✔️ |
| 资金应用∙转账 | ✔️ | |
| 资金应用∙转账∙用户确认模式 | ✔️ | |
| 资金应用∙转账∙服务商模式 | | ✔️ |
| 资金应用∙转账∙银行模式 | | ✔️ |
| 收付通∙进件 | | ✔️ |
| 收付通∙注销 | | ✔️ |
| 收付通∙支付 | | ✔️ |
| 收付通∙合单 | | ✔️ |
| 收付通∙合单代扣 | | ✔️ |
| 收付通∙个人收款 | | ✔️ |
| 收付通∙补差 | | ✔️ |
| 收付通∙分账 | | ✔️ |
| 收付通∙退款 | | ✔️ |
| 收付通∙充值 | | ✔️ |
| 收付通∙余额 | | ✔️ |
| 收付通∙提现 | | ✔️ |
| 收付通∙赔付 | | ✔️ |
| 收付通∙售后赔付 | | ✔️ |
| 收付通∙保险理赔 | | ✔️ |
| 收付通∙账单 | | ✔️ |
| 收付通∙跨境 | | ✔️ |
| 平台保证金∙赔付用户 | | ✔️ |
| 平台保证金∙赔付商户 | | ✔️ |
| 平台保证金∙赔付用户运费 | | ✔️ |
| 服务商∙进件 | | ✔️ |
| 会员卡 | ✔️ | ✔️ |
| 会员卡∙基础功能 | ✔️ | ✔️ |
| 会员卡∙运营投放 | ✔️ | ✔️ |
| 会员卡∙权益设置 | ✔️ | ✔️ |
| 会员卡∙会员有礼 | ✔️ | ✔️ |
| 支付分 | ✔️ | |
| 支付分∙免确认模式 | ✔️ | |
| 支付分∙免确认模式∙普通授权 | ✔️ | |
| 支付分∙免确认模式∙预授权 | ✔️ | |
| 支付分∙签约计划 | ✔️ | ✔️ |
| 支付分∙先享卡 | ✔️ | |
| 支付分∙先用后付 | ✔️ | ✔️ |
| 支付分∙先享后付 | ✔️ | |
| 支付分∙智慧零售 | ✔️ | |
| 支付分∙停车服务 | ✔️ | ✔️ |
| 支付分∙服务商模式 | | ✔️ |
| 支付分∙服务商模式∙免确认 | | ✔️ |
| 支付分∙机构模式 | | ✔️ |
| 品牌小店营销 | ✔️ | ✔️ |
| 微信寄快递 | | ✔️ |
| 委托代扣 | ✔️ | ✔️ |
| 委托代扣∙保险业 | ✔️ | |
| 校园轻松付 | | ✔️ |
| 教育续费通 | ✔️ | ✔️ |
| 学生卡身份权益 | ✔️ | |
| 爱心餐 | ✔️ | ✔️ |
| 乘车服务 | ✔️ | ✔️ |
| ETC授权扣费 | ✔️ | ✔️ |
| 电动自行车行业代扣 | ✔️ | ✔️ |
| 出租车电子发票 | | ✔️ |
| 租用充电宝∙隔夜归还 | ✔️ | |
| 运营工具∙代金券 | ✔️ | ✔️ |
| 运营工具∙消费金 | ✔️ | |
| 运营工具∙商家券 | ✔️ | ✔️ |
| 运营工具∙委托营销 | ✔️ | ✔️ |
| 运营工具∙支付有礼 | ✔️ | ✔️ |
| 运营工具∙消费卡 | ✔️ | ✔️ |
| 运营工具∙用工卡 | | ✔️ |
| 运营工具∙通用接口 | ✔️ | ✔️ |
| 经营工具∙智慧商圈 | ✔️ | ✔️ |
| 经营工具∙支付即服务 | ✔️ | ✔️ |
| 经营工具∙点金计划 | | ✔️ |
| 经营工具∙连锁品牌∙分账 | ✔️ | ✔️ |
| 经营工具∙连锁品牌∙门店 | ✔️ | ✔️ |
| 经营工具∙微信点餐 | | ✔️ |
| 经营工具∙电子发票 | ✔️ | ✔️ |
| 经营工具∙电子小票 | | ✔️ |
| 经营工具∙小票机 | | ✔️ |
| 营销工具∙收款有礼 | ✔️ | ✔️ |
| 营销工具∙代扣切卡 | ✔️ | ✔️ |
| 营销工具∙周周惠 | | ✔️ |
| 商家充值 | ✔️ | ✔️ |
| 结算规则管理 | | ✔️ |
| 风险管理 | ✔️ | ✔️ |
| 风险合规∙消费者投诉 | ✔️ | ✔️ |
| 风险合规∙商户违规通知 | ✔️ | ✔️ |
| 风险合规∙开户意愿确认 | ✔️ | ✔️ |
| 风险合规∙不活跃商户身份核实 | | ✔️ |
| 通用接口 | ✔️ | ✔️ |
| 跨境 | ✔️ | ✔️ |
| 跨境∙进件 | | ✔️ |
| 跨境∙报关 | ✔️ | ✔️ |
| 跨境∙支付 | ✔️ | ✔️ |
| 跨境∙退款 | ✔️ | ✔️ |
| 跨境∙分账 | ✔️ | ✔️ |
| 跨境∙代扣 | ✔️ | ✔️ |
| 跨境∙H5权限 |  | ✔️ |
| 沙箱环境 | ✔️ | ✔️ |
| APIv2∙人脸支付 | | ✔️ |
| APIv2∙基础支付 | ✔️ | ✔️ |
| APIv2∙基础支付∙合单 | ✔️ | ✔️ |
| APIv2∙基础支付∙账单 | ✔️ | ✔️ |
| APIv2∙基础支付∙退款 | ✔️ | ✔️ |
| APIv2∙资金应用∙分账 | ✔️ | ✔️ |
| APIv2∙资金应用∙红包 | ✔️ | ✔️ |
| APIv2∙资金应用∙付款 | ✔️ | ✔️ |
| APIv2∙车主平台 | ✔️ | ✔️ |
| APIv2∙乘车码代扣 | ✔️ | ✔️ |
| APIv2∙免押租借 | ✔️ | |
| APIv2∙免押速住 | ✔️ | |
| APIv2∙酒店押金 | ✔️ | ✔️ |
| APIv2∙委托扣款 | ✔️ | ✔️ |
| APIv2∙代金券 | ✔️ | ✔️ |
| APIv2∙小微 | | ✔️ |
| APIv2∙风控 | ✔️ | ✔️ |
| APIv2∙报关 | ✔️ | ✔️ |
| APIv2∙通用 | ✔️ | ✔️ |
| APIv2∙企微∙红包 | ✔️ | |
| APIv2∙企微∙付款 | ✔️ | |

## PHP

推荐使用 `composer` 安装

`composer require --dev iwechatpay/openapi`

## IDE提示

[工作原理及介绍见这里](https://developers.weixin.qq.com/community/develop/article/doc/000a0ce867842092f8cc65e5356013)

![vscode screenshot](./.github/how-it-works-screenshot-1.png)

![vscode screenshot](./.github/how-it-works-screenshot-2.png)

![vscode screenshot](./.github/how-it-works-screenshot-3.png)

## 特殊URI语法规则

| 源URI | 模版变量 | 值 |
| --- | --- | --- |
| `secapi/mch/addInstitutionsub` | `{addinstitutionsub}` [^1] | `addInstitutionsub` |
| `secapi/mch/modifyInstitutionsub` | `{modifyinstitutionsub}` [^1] | `modifyInstitutionsub` |
| `secapi/mch/queryInstitutionsub` | `{queryinstitutionsub}` [^1] | `queryInstitutionsub` |
| `v3/applyment4sub/applyment/` | `{empty}` [^2] | |
| `v3/ecommerce/applyments/` | `{empty}` [^2] | |

[^1]: 源URI上含有`I`大写字符，需要用模版变量构造
[^2]: 源URI末尾以`/`结尾，需要值为用空的模版变量构造，`{empty}`为`RFC6570`Level3保留语法

## License

[MIT](LICENSE)
