<?php

namespace Ivdet\KrakenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function callbackAction(Request $request)
    {
        error_log(print_r($request->getContent(), 1));
        return new Response();
    }

    public function testAction()
    {
        $kraken = $this->container->get('ivdet.kraken.test');
        $response = $kraken->squeeze('http://dummyimage.com/600x400/13163d/22b814&text=kraken');

        error_log(print_r($response->getResponse(), 1));
        return new Response('xxx');
    }
}
