<?php

namespace Webshr\Psr7ServerRequestExtension\Test;

use Webshr\Psr7ServerRequestExtension\InteractsWithInput;
use Webshr\Psr7ServerRequestExtension\InteractsWithUri;
use Laminas\Diactoros\ServerRequest;

class TestDiactorosServerRequest extends ServerRequest
{
    use InteractsWithUri, InteractsWithInput;
}
