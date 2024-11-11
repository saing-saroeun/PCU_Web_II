<?php

namespace App\Repositories\Admin;

use App\Support\Pagination;
use Illuminate\Support\Facades\DB;

class AdminRepository implements IAdminRepository
{
    public function lists(string $search = null)
    {
        return DB::table('admins as a')
            ->select('a.*')
            ->groupBy('a.id')
            ->orderBy('a.id')
            ->paginate(Pagination::PAGINATE);
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
