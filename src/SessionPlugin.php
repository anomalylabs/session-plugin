<?php namespace Anomaly\SessionPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;
use Twig_SimpleFunction;

/**
 * Class SessionPlugin
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\Streams\Addon\Plugin\Auth
 */
class SessionPlugin extends Plugin
{

    /**
     * The session store from Laravel.
     *
     * @var Store
     */
    protected $session;

    /**
     * Create a new SessionPlugin instance.
     *
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Return plugin functions.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('session', [$this->session, 'get']),
            new Twig_SimpleFunction('csrf_token', [$this->session, 'token'], ['is_safe' => ['html']]),
            new Twig_SimpleFunction('csrf_field', 'csrf_field', ['is_safe' => ['html']]),
            new Twig_SimpleFunction('session_get', [$this->session, 'get']),
            new Twig_SimpleFunction('session_pull', [$this->session, 'pull']),
            new Twig_SimpleFunction('session_has', [$this->session, 'has']),
        ];
    }
}
