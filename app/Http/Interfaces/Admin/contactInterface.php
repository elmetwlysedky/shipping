<?php
namespace App\Http\Interfaces\Admin;

interface contactInterface
{
    public function index();

    public function create();

    public function store($request);

    public function show($id);

    public function destroy($id);
}
