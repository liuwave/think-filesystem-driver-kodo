<?php
/**
 * Created by PhpStorm.
 * User: liuwave
 * Date: 2020/7/6 20:12
 * Description:
 */
declare(strict_types=1);
namespace liuwave\think\filesystem\driver;

use League\Flysystem\AdapterInterface;
use Liz\Flysystem\QiNiu\QiNiuOssAdapter;
use think\filesystem\Driver;

/**
 * Class Kodo
 * @package liuwave\think\filesystem\driver
 */
class Kodo extends Driver
{
    
    /**
     * @return \League\Flysystem\AdapterInterface
     */
    protected function createAdapter() : AdapterInterface
    {
        return new QiNiuOssAdapter(
          $this->config[ 'accessKey' ], $this->config[ 'secretKey' ], $this->config[ 'bucket' ], $this->config[ 'url' ]
        );
    }
}