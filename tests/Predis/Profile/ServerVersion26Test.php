<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Profile;

/**
 *
 */
class ServerVersion26Test extends ServerVersionTestCase
{
    /**
     * {@inheritdoc}
     */
    public function getProfileInstance()
    {
        return new ServerVersion26();
    }

    /**
     * {@inheritdoc}
     */
    public function getExpectedVersion()
    {
        return '2.6';
    }

    /**
     * {@inheritdoc}
     */
    public function getExpectedCommands()
    {
        return array(
            0 => 'exists',
            1 => 'del',
            2 => 'type',
            3 => 'keys',
            4 => 'randomkey',
            5 => 'rename',
            6 => 'renamenx',
            7 => 'expire',
            8 => 'expireat',
            9 => 'ttl',
            10 => 'move',
            11 => 'sort',
            12 => 'set',
            13 => 'setnx',
            14 => 'mset',
            15 => 'msetnx',
            16 => 'get',
            17 => 'mget',
            18 => 'getset',
            19 => 'incr',
            20 => 'incrby',
            21 => 'decr',
            22 => 'decrby',
            23 => 'rpush',
            24 => 'lpush',
            25 => 'llen',
            26 => 'lrange',
            27 => 'ltrim',
            28 => 'lindex',
            29 => 'lset',
            30 => 'lrem',
            31 => 'lpop',
            32 => 'rpop',
            33 => 'rpoplpush',
            34 => 'sadd',
            35 => 'srem',
            36 => 'spop',
            37 => 'smove',
            38 => 'scard',
            39 => 'sismember',
            40 => 'sinter',
            41 => 'sinterstore',
            42 => 'sunion',
            43 => 'sunionstore',
            44 => 'sdiff',
            45 => 'sdiffstore',
            46 => 'smembers',
            47 => 'srandmember',
            48 => 'zadd',
            49 => 'zincrby',
            50 => 'zrem',
            51 => 'zrange',
            52 => 'zrevrange',
            53 => 'zrangebyscore',
            54 => 'zcard',
            55 => 'zscore',
            56 => 'zremrangebyscore',
            57 => 'ping',
            58 => 'auth',
            59 => 'select',
            60 => 'echo',
            61 => 'quit',
            62 => 'info',
            63 => 'slaveof',
            64 => 'monitor',
            65 => 'dbsize',
            66 => 'flushdb',
            67 => 'flushall',
            68 => 'save',
            69 => 'bgsave',
            70 => 'lastsave',
            71 => 'shutdown',
            72 => 'bgrewriteaof',
            73 => 'setex',
            74 => 'append',
            75 => 'substr',
            76 => 'blpop',
            77 => 'brpop',
            78 => 'zunionstore',
            79 => 'zinterstore',
            80 => 'zcount',
            81 => 'zrank',
            82 => 'zrevrank',
            83 => 'zremrangebyrank',
            84 => 'hset',
            85 => 'hsetnx',
            86 => 'hmset',
            87 => 'hincrby',
            88 => 'hget',
            89 => 'hmget',
            90 => 'hdel',
            91 => 'hexists',
            92 => 'hlen',
            93 => 'hkeys',
            94 => 'hvals',
            95 => 'hgetall',
            96 => 'multi',
            97 => 'exec',
            98 => 'discard',
            99 => 'subscribe',
            100 => 'unsubscribe',
            101 => 'psubscribe',
            102 => 'punsubscribe',
            103 => 'publish',
            104 => 'config',
            105 => 'persist',
            106 => 'strlen',
            107 => 'setrange',
            108 => 'getrange',
            109 => 'setbit',
            110 => 'getbit',
            111 => 'rpushx',
            112 => 'lpushx',
            113 => 'linsert',
            114 => 'brpoplpush',
            115 => 'zrevrangebyscore',
            116 => 'watch',
            117 => 'unwatch',
            118 => 'object',
            119 => 'slowlog',
            120 => 'client',
            121 => 'pttl',
            122 => 'pexpire',
            123 => 'pexpireat',
            124 => 'psetex',
            125 => 'incrbyfloat',
            126 => 'bitop',
            127 => 'bitcount',
            128 => 'hincrbyfloat',
            129 => 'eval',
            130 => 'evalsha',
            131 => 'script',
            132 => 'time',
        );
    }
}
