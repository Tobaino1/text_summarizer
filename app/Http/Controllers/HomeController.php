<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use TextRazor;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    /**
     * Call external API and return summarized text
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function summarize(Request $request)
    {
        // get sentence from request
        $paragraph = $request->input('paragraph');
        $request->session()->flash('paragraph', $paragraph);

        // setup external API client
        $client = new Client([
            'base_uri' => 'https://api.spinbot.com',
            'timeout'  => 2.0,
            'headers'  => [
                'x-auth-key' => config('services.spinbot.key')
            ]
        ]);

        // call API here...
        try {
            $response = $client->request('GET', '', ['body' => $paragraph]);

            // get response
            $balance = $response->getHeader('available-spins');
            $body = $response->getBody();

            // flash response
            $request->session()->flash('response', (string) $body);
            $request->session()->flash('balance', $balance[0]);

        } catch (ClientException $e) {
            $error = Psr7\str($e->getResponse());

            // flash client error
            $request->session()->flash('error', $error);
        } catch (RequestException $e) {
            $error = 'Network Error Occurred';
            if ($e->hasResponse()) {
                $error = Psr7\str($e->getResponse());
            }

            // flash network error
            $request->session()->flash('error', $error);
        }

        return back();
    }

    public function summarize_two(Request $request)
    {
        // get sentence from request
        $paragraph = $request->input('paragraph');
        $request->session()->flash('paragraph', $paragraph);

        // setup external API client
        $client = new Client([
            'base_uri' => 'https://api.textrazor.com',
            'timeout' => 2.0,
            'headers' => [
                'x-auth-key' => config('services.textrazor.key')
            ]
        ]);

        // call API here...
        try {
            $response = $client->request('GET', '', ['body' => $paragraph]);

            // get response
            $balance = $response->getHeader('available-spins');
            $body = $response->getBody();

            // flash response
            $request->session()->flash('response', (string)$body);
            $request->session()->flash('balance', $balance[0]);

        } catch (ClientException $e) {
            $error = Psr7\str($e->getResponse());

            // flash client error
            $request->session()->flash('error', $error);
        } catch (RequestException $e) {
            $error = 'Network Error Occurred';
            if ($e->hasResponse()) {
                $error = Psr7\str($e->getResponse());
            }

            // flash network error
            $request->session()->flash('error', $error);
        }

        return back();
    }

}
