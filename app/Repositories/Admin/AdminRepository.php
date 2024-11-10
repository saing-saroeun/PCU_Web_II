<?php

namespace App\Repositories\Admin;

use Illuminate\Support\Facades\DB;

class AdminRepository implements IAdminRepository
{
    public function lists()
    {
        return DB::table('admins')->get();
    }

    public function store(array $data)
    {
        // 
    }

    public function edit($id)
    {
        // 
    }

    public function update($id, array $data)
    {
        // 
    }

    public function delete($id)
    {
        // 
    }
}
