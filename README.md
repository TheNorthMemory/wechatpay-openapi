# 微信支付APIv3接口文档

整理自[微信支付官方文档](https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pages/Overview.shtml) [WechatPay-API-v3](https://wechatpay-api.gitbook.io/wechatpay-api-v3/)

本项目/工具有如下约定：

1. 对于类型定义是 **string($MediaId)**， 需要用 */通用接口* 媒体(图片/视频)上传获取到返回值；
2. 对于类型定义是 **string($MediaUrl)**，需要用 */运营工具/通用接口* 营销图片上传接口取得返回值；
3. 对于类型定义是 **string($rfc3339)**，请使用时间带时区字符串；
4. 对于类型定义是 **string($rfc2397)**，官方文档说是可直接用于img标签，不确定是否符合RFC2397规范；
5. 对于类型定义是 **string($numeric)**，请留意其值传递实质是字符串类型，类型校对需要使用numeric校对；
6. 对于类型定义是 **string($jsonArrayLike)**，请使用数组对象转字符串；
7. 对于类型定义是 **string($date)**，请留意使用*东八区*日期格式；
8. 对于类型定义是 **string($url)**，请使用以https开头的URL；
9. 对于类型定义是 **number($uint64)**，请注意返回值JSON解码时，有可能整型溢出；
10. 对于对象属性 **x-is-sensitive**，请根据场景需要，在请求体内需要 *rsa.encrypt*, 在返回体需要 *rsa.decrypt*；

## License

The MIT License (MIT)

Copyright (c) 2020 James ZHANG(TheNorthMemory)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
