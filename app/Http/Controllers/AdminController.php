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
        $admin = $this->adminRepository->lists();

        return inertia('Admin/Index', [
            "admins" => $admin->items(),
        ]);
    }

    public function create()
    {
        return inertia('Admin/Create');
    }
}
