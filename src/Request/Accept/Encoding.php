<?php
namespace Aura\Web\Request\Accept;

class Encoding extends AbstractValues
{
    protected $server_key = 'HTTP_ACCEPT_ENCODING';

    protected $value_class = 'Aura\Web\Request\Accept\Value\Encoding';
}