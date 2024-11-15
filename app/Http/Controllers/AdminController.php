<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\AdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function index()
    {
        $admins = $this->adminRepository->lists();

        return inertia('Admin/Index', [
            "admins" => $admins->items(),
            "pagination" => [
                "total" => $admins->total(),
                "current_page" => $admins->currentPage(),
                "last_page" => $admins->lastPage(),
                "per_page" => $admins->perPage(),
                "links" => $admins->links(),
            ],
        ]);
    }

    public function create()
    {
        return inertia('Admin/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'tel_phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'status' => 'required|in:active,inactive',
            'password' => 'required|string|min:8',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $this->adminRepository->store($data);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $admin = $this->adminRepository->edit($id);

        if (!$admin) {
            return redirect()->route('admins.index')->with('error', 'Admin not found.');
        }

        return inertia('Admin/Edit', [
            'admin' => $admin,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $id,
            'tel_phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'password' => 'nullable|string|min:8',
        ]);

        $updated = $this->adminRepository->update($id, $data);

        if (!$updated) {
            return redirect()->route('admins.index')->with('error', 'Failed to update admin.');
        }

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy($id)
    {
        $deleted = $this->adminRepository->delete($id);

        if (!$deleted) {
            return redirect()->route('admins.index')->with('error', 'Failed to delete admin.');
        }

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}
