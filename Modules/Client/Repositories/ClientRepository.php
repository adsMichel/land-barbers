<?php

namespace Modules\Client\Repositories;

use Modules\Client\Models\Client;

class ClientRepository
{
    public function model()
    {
        return new Client();
    }

    public function getAllPaginate($request)
    {
        $data = self::model();

        if (!empty($request['id'])) {
            $data = $data->where('id', $request['id']);
        }

        if (!empty($request['name'])) {
            $data = $data->where('name', 'like', '%' . $request['name'] . '%');
        }

        if (!empty($request['email'])) {
            $data = $data->where('email', 'like', '%' . $request['email'] . '%');
        }

        $data = $data->paginate(20);
        return $data;
    }

    public function store(array $data)
    {
        if (isset($data['whatsapp'])) {
            $data['whatsapp'] = true;
        }

        if (!isset($data['whatsapp'])) {
            $data['whatsapp'] = false;
        }

        if (isset($data['isentoEstadual'])) {
            $data['isentoEstadual'] = true;
        }

        if (!isset($data['isentoEstadual'])) {
            $data['isentoEstadual'] = false;
        }

        if (self::model()->fill($data)->save()) {
            return true;
        }
        return false;
    }

    public function find($id)
    {
        return self::model()->find($id);
    }

    public function update($id, array $data)
    {
        if (isset($data['whatsapp'])) {
            $data['whatsapp'] = true;
        }

        if (!isset($data['whatsapp'])) {
            $data['whatsapp'] = false;
        }

        if (isset($data['isentoEstadual'])) {
            $data['isentoEstadual'] = true;
        }

        if (!isset($data['isentoEstadual'])) {
            $data['isentoEstadual'] = false;
        }

        if (self::model()->find($id)->update($data)) {
            return true;
        }
        return false;
    }

    public function destroy($id)
    {
        if (self::model()->find($id)->delete()) {
            return true;
        }
        return false;
    }
}
