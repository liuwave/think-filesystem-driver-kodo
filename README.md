# think-filesystem-driver-kodo

这是一个基于七牛云对象存储的thinkphp6.0 Filesystem驱动。

## 安装

```shell script
    composer require liuwave/think-filesystem-driver-kodo
```

在`config/filesystem.php`中添加配置:

```
    'kodo' => [
      'type'            => \liuwave\filesystem\driver\Kodo::class ,
      'accessKey' => '******',
      'secretKey' => '******',
      'bucket'    => 'bucket',
      'url'       => '',//不要斜杠结尾，URL地址域名
    ],
```
    


## 使用

```php
//默认$file为单文件。$file为多文件时file为数组，需要进行遍历处理
$file=\request()->file('file');
$filesystem     = \think\facade\Filesystem::disk('kodo');
$saveName       = $filesystem->putFile('/path/to/save/file', $file, 'md5');
$saveName       = str_replace('\\', '/', $saveName);
$fullName = think\facade\Filesystem::getDiskConfig('kodo', 'url').'/'.$saveName;
```


## 授权

MIT


## 参考

- thinkphp
- [七牛云对象存储kodo](https://developer.qiniu.com/kodo)
- [liz/flysystem-qiniu](https://github.com/liz/flysystem-qiniu)



## 更多

- [阿里云liuwave/think-filesystem-driver-oss](https://github.com/liuwave/think-filesystem-driver-oss)
- [腾讯云liuwave/think-filesystem-driver-cos](https://github.com/liuwave/think-filesystem-driver-cos)

