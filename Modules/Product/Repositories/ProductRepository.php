<?php

namespace Modules\Product\Repositories;

use Modules\Product\Models\Product;

class ProductRepository
{
    public function model()
    {
        return new Product();
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

        if (!empty($request['quantidade'])) {
            $data = $data->where('quantidade', 'like', '%' . $request['quantidade'] . '%');
        }

        $data = $data->paginate(20);
        return $data;
    }

    public function store(array $data)
    {
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
