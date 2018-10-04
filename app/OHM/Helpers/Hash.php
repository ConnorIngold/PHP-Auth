<?php

  namespace OHM\Helpers;

class Hash
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function password($password)
    {
          return password_hash(
              $password,
              $this->config->get('app.hash.algo'),
              ['cost' => $this->config->get('app.hash.cost')]
          );
      }
  }