<?php
/* Generated by neoan3-cli */

namespace Neoan3\Frame;

use Neoan3\Apps\Db;
use Neoan3\Apps\DbException;
use Neoan3\Apps\Stateless;
use Neoan3\Core\Serve;

class Moe extends Serve
{
    function __construct()
    {
        parent::__construct();
        Stateless::setSecret('moescoolsecret');
        $this->includeJs(path.'/node_modules/axios/dist/axios.min.js', ['base' => base]);
        $this->header = file_get_contents(__DIR__. '/header.html');
        try{
            Db::setEnvironment([
                'name' => 'moegotit',
                'password' => '',
                'assumes_uuid' => true
            ]);
        } catch (DbException $e){
            die('setup issue');
        }

    }

    function constants()
    {
        return [
            'stylesheet' => [
                'https://unpkg.com/spectre.css/dist/spectre.min.css',
                'https://unpkg.com/spectre.css/dist/spectre-exp.min.css',
                'https://unpkg.com/spectre.css/dist/spectre-icons.min.css',
            ],
            'js' => [
//                ['src'=>path.'/node_modules/axios/dist/axios.min.js', 'data'=>[]]
            ]
        ];
    }
}
