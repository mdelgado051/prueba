<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{

    private $endPoint;

    public function __construct()
    {
        $this->endPoint = env('LEADS_ENDPOINT');
    }

    public function sendLead(Request $request)
    {
        $now = new Carbon();
        $request->merge(['source' => 'Web']);
        $request->merge(['ip' => $request->ip()]);
        $request->merge(['date' => $now->format('Y-m-d')]);

        $payload = $request->all();
        $response = $this->makeLeadRequest($payload);

        if ($response->json()['status'] == "success") {
            return response()->json(['success' => true, 'message' => 'Hemos recibido tu mensaje, en breve te daremos una respuesta']);
        }

        return response()->json(['error' => true, 'message' => 'Ha ocurrido un error, revisa tu información e inténtalo de nuevo.']);
    }

    private function makeLeadRequest(Array $body)
    {
        $endpointType = '/marketing/leads/requests/';
 
        if (isset($body['form-type']) && $body['form-type'] === 'support') {
            $endpointType = '/support/tickets/requests/';
        }

        return Http::withToken(env('LEADS_API_KEY'))
            ->post($this->endPoint . $endpointType, $body);
    }
}
