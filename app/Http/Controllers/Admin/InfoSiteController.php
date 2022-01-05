<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\InfoSiteInterface;
use App\Http\Requests\Admin\InfoSite\AddInfoSiteRequest;
use App\Http\Requests\Admin\InfoSite\DeleteInfoSiteRequest;
use App\Http\Requests\Admin\InfoSite\UpdateInfoSiteRequest;

class InfoSiteController extends Controller
{
    private $infoSiteInterface;

    public function __construct(InfoSiteInterface $infoSite)
    {
        $this->infoSiteInterface = $infoSite;
    }

    public function index()
    {
        return $this->infoSiteInterface->index();
    }

    public function create()
    {
        return $this->infoSiteInterface->create();
    }

    public function store(AddInfoSiteRequest $request)
    {
        return $this->infoSiteInterface->store($request);
    }

    public function edit($id)
    {
        return $this->infoSiteInterface->edit($id);
    }

    public function update(UpdateInfoSiteRequest $request)
    {
        return $this->infoSiteInterface->update($request);
    }

    public function delete(DeleteInfoSiteRequest $request)
    {
        return $this->infoSiteInterface->delete($request);
    }
}
