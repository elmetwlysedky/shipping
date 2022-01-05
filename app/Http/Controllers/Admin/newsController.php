<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\latest_news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\addNewsRequest;
use App\Http\Requests\updateNewsRequest;
use App\Http\Interfaces\Admin\newsInterface;

class newsController extends Controller
{

    private $newsInterface;

    public function __construct(newsInterface $pram)
    {
        $this->newsInterface=$pram;
        $this->middleware(['auth:admin']);
    }

    public function index()
    {
       return $this->newsInterface->index();

    }


    public function create()
    {
        return $this->newsInterface->create();
    }


    public function store(addNewsRequest $request)
{

    return $this->newsInterface->store($request);
    }


    public function show()
    {

    }


    public function edit($id)
    {

        return $this->newsInterface->edit($id);

    }


    public function update(updateNewsRequest $request, $id)
    {
       return $this->newsInterface->update($request , $id);
    }


    public function destroy($id)
    {
    return $this->newsInterface->destroy($id);
    }
}
