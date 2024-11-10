<?php

namespace App\Repositories\Admin;

interface IAdminRepository
{
    public function lists($search = null);

    public function store(array $data);

    public function edit($id);

    public function update($id, array $data);

    public function delete($id);
}
