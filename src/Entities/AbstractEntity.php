<?php

namespace Instagram\Entities;

use GuzzleHttp\ClientInterface;
use Instagram\Http\Client\AdapterInterface;

/**
 * AbstractEntity
 *
 * @package    Instagram
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/instagram-sdk
 * @license    MIT
 */
abstract class AbstractEntity
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * Creates a new instance of `User`.
     *
     * @param AdapterInterface $client
     */
    public function __construct(AdapterInterface $client)
    {
        $this->client = $client;
    }
}