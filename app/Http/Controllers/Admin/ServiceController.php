<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        return view('dashboard.service.index', compact('services'));
    }

    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        Service::create($data);
        return redirect()->back()->with('success', __('lang.DataSaved'));
    }

    public function edit($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return response()->json([
                'message' => 'Service item not found.'
            ], 404); // Return a 404 error if the item is not found
        }

        return response()->json($service);
    }

    public function update(ServiceRequest $request, $serviceId)
    {
        $data = $request->validated();
        $service = Service::find($serviceId);
        if ($service) {
            $service->update($data);
            return redirect()->back()->with('success', __('lang.DataUpdated'));
        }
        return redirect()->back()->with('error', __('lang.error'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', __('lang.DataDeleted'));
    }
}
