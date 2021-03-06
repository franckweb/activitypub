<?php

/*
 * This file is part of the ActivityPhp package.
 *
 * Copyright (c) landrok at github.com/landrok
 *
 * For the full copyright and license information, please see
 * <https://github.com/landrok/activitypub/blob/master/LICENSE>.
 */

namespace ActivityPhp\Server\Configuration;

/**
 * Server instance configuration stack
 */ 
class InstanceConfiguration extends AbstractConfiguration
{
    /**
     * @var string local HTTP hostname
     */
    protected $host = 'localhost';

    /**
     * @var string[string local HTTP port
     */
    protected $port = '443';

    /**
     * @var bool Debug flag
     */
    protected $debug = false;

    /**
     * @var string local HTTP scheme
     */
    protected $scheme = 'https';

    /**
     * @var string Default actor path
     */
    protected $actorPath = '/@<handle>';

    /**
     * @var string Default activity path
     */
    protected $activityPath = '/@<handle>/activities/<id>';

    /**
     * @var string Default note path
     */
    protected $notePath = '/@<handle>/note/<id>';

    /**
     * Dispatch configuration parameters
     * 
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        parent::__construct($params);
    }
}
