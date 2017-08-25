<?php
/**
 * Api Controller
 *
 */
namespace App\Controllers;
 
use Psr\Http\Message\ServerRequestInterface as Request;
 
use Psr\Http\Message\ResponseInterface as Response;
 
use App\Interfaces\ApiInterface;

use App\Traits\ApiControllerTrait;
 
use App\Models\Model;
 
class SomeApiController implements ApiInterface
{
    use ApiControllerTrait;
}
