<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait Crudable
{

    public function store(Request $request)
    {
        try {

            DB::beginTransaction();
            $data = $request->all();

            if (method_exists($this->repository, 'storeValidation')) {
                $this->repository->storeValidation($data)->validate();
            }

            $item = $this->repository->store($data);
            DB::commit();

            if (isset($this->resource)) {
                return response()->success($this->resource . " Created successfully", $item);
            }

            return response()->success("Record created successfully", $item);

        } catch (\Exception $e) {
            DB::rollBack();
            DB::commit();
            return $this->handleException($e);
        }
    }

    public function update($id, Request $request)
    {
        try {

            DB::beginTransaction();
            $data = $request->input();

            if (method_exists($this->repository, 'updateValidation')) {
                $this->repository->updateValidation($data)->validate();
            }

            $item = $this->repository->update($data, $id);
            DB::commit();

            if (isset($this->resource)) {
                return response()->success($this->resource . " updated successfully", $item);
            }
            
            return response()->success("Record updated successfully", $item);

        } catch (\Exception $e) {
            DB::rollBack();
            DB::commit();
            return $this->handleException($e);
        }
    }

    public function delete($id)
    {
        try {
            $this->repository->delete($id);

            if (isset($this->resource)) {
                return response()->success($this->resource . " deleted successfully");
            }
            return response()->success("Record deleted successfully");

        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function multiDelete(Request $request)
    {   
        try {
            
            $items = $this->repository->multiDelete($request->all());
            if (!$items) {
                    return response()->error('Record not exist', 200);
            }
            return response()->success("Multiple records deleted successfully");

        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function index(Request $request)
    {
    
        try {
            $paginated_items = $this->repository->getPaginated($request->all());
            return response()->success("Record fetched successfully", $paginated_items);

        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function show($id)
    {
        try {
            $item = $this->repository->getSingle($id);

            if (isset($this->resource)) {
                return response()->success($this->resource . " fetched successfully", $item);

            }
            return response()->success("Record fetched successfully", $item);

        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

}
