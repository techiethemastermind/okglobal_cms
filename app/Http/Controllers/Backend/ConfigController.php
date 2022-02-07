<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Config;
use App\Http\Controllers\Traits\FileUploadTrait;

class ConfigController extends Controller
{
    use FileUploadTrait;

    /**
     * Get Config Data
     */
    public function getGeneralSettings() {

        return view('backend.settings.general');
    }

    public function saveGeneralSettings(Request $request) {

        if (($request->get('mail_provider') == 'sendgrid') && ($request->get('list_selection') == 2)) {
            if ($request->get('list_name') == "") {
                return back()->withErrors(['Please input list name']);
            }
            $apiKey = config('sendgrid_api_key');
            $sg = new \SendGrid($apiKey);
            try {
                $request_body = json_decode('{"name": "' . $request->get('list_name') . '"}');
                $response = $sg->client->contactdb()->lists()->post($request_body);
                if ($response->statusCode() != 201) {
                    return back()->withErrors(['Check name and try again']);
                }
                $response = json_decode($response->body());
                $sendgrid_list_id = Config::where('sendgrid_list_id')->first();
                $sendgrid_list_id->value = $response->id;
                $sendgrid_list_id->save();
            } catch (Exception $e) {
                \Log::info($e->getMessage());
            }
        }

        $requests = $this->saveLogos($request);

        foreach ($requests->all() as $key => $value) {
            if ($key != '_token') {
                $key = str_replace('__', '.', $key);
                $config = Config::firstOrCreate(['key' => $key]);
                if($value !== null) {
                    $config->value = $value;
                }
                $config->save();
            }
        }

        return response()->json([
            'success' => true,
            'action' => 'update'
        ]);
    }
}
