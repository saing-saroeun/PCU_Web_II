<?php

namespace App\Repositories\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements IAdminRepository
{
    public function lists(string $search = null)
    {
        $query = DB::table('admins as a')
            ->select('a.*')
            ->groupBy('a.id')
            ->orderBy('a.id');

        if (!empty($search)) {
            $query->where('a.full_name', 'like', '%' . $search . '%');
        }

        return $query->paginate(10);
    }

    public function store(array $data)
    {
        $insertData = [
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'tel_phone' => $data['tel_phone'] ?? null,
            'address' => $data['address'] ?? null,
            'image' => $data['image'] ?? null,
            'status' => $data['status'],
            'password' => Hash::make($data['password']),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        return DB::table('admins')->create($insertData);
    }

    public function edit($id)
    {
        return DB::table('admins')
            ->select('id', 'full_name', 'email', 'tel_phone', 'address', 'image', 'status', 'created_at', 'updated_at')
            ->where('id', $id)
            ->first();
    }

    public function update($id, array $data)
    {
        $updateData = [
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'tel_phone' => $data['tel_phone'] ?? null,
            'address' => $data['address'] ?? null,
            'image' => $data['image'] ?? null,
            'status' => $data['status'],
            'updated_at' => now(),
        ];

        if (!empty($data['password'])) {
            $updateData['password'] = Hash::make($data['password']);
        }

        return DB::table('admins')
            ->where('id', $id)
            ->update($updateData);
    }

    public function delete($id)
    {
        return DB::table('admins')
            ->where('id', $id)
            ->delete();
    }
}
