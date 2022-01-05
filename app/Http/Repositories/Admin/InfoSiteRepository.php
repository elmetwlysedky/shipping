<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\InfoSiteInterface;
use App\Http\Traits\ImagesTrait;
use App\Http\Traits\InfoSiteTrait;
use App\Models\InfoSite;
use Illuminate\Support\Facades\Session;

class InfoSiteRepository implements InfoSiteInterface
{
    use InfoSiteTrait;
    use ImagesTrait;
    private $infoSiteModel;

    public function __construct(InfoSite $infoSite)
    {
        $this->infoSiteModel = $infoSite;
    }

    public function index()
    {
        $data = $this->show_all_info();
        return view('Dashboard.Admin.info-site.index', compact('data'));
    }

    public function create()
    {
        return view('Dashboard.Admin.info-site.create');
    }

    public function store($request)
    {
        $image = $request->file('logo');
        $imageName = time(). '_' . '.' . $image->getClientOriginalExtension();
        $this->uploadImage($image, $imageName, 'info-site'); //ImagesTrait
        $this->infoSiteModel::create([
            'title' => ['en' =>$request->en_title, 'ar' => $request->ar_title],
            'logo' => $imageName,
            'email' => $request->email,
            'phone' => $request->phone,
            'day' => ['en' => $request->en_day,'ar' =>$request->ar_day],
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'linkedin_url' => $request->linkedin_url,
        ]);
        Session::flash('done', 'Data Has Been Created Successfully');
        return redirect(route('admin.info-site.index'));
    }

    public function edit($id)
    {
        $info = $this->get_info_by_id($id);
        return view('Dashboard.Admin.info-site.edit', compact('info'));
    }

    public function update($request)
    {
        $info = $this->get_info_by_id($request->info_id); //InfoSiteTrait
        if ($request->hasFile('logo')) {
            $image =$request->file('logo');
            $imageName = time(). '_' . '.' . $image->getClientOriginalExtension();
            $oldPath = 'images/info-site/'. $info->logo;
            $this->uploadImage($image,$imageName, 'info-site', $oldPath); //ImagesTrait
        }

        $info->update([
            'title' => ['en' =>$request->en_title, 'ar' => $request->ar_title],
            'email' => $request->email,
            'phone' => $request->phone,
            'day' => ['en' => $request->en_day,'ar' =>$request->ar_day],
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'linkedin_url' => $request->linkedin_url,
            'image' => (isset($imageName)) ? $imageName : $info->logo
        ]);
        Session()->flash('done','Data Has Been Updated');
        return redirect(route('admin.info-site.index'));
    }

    public function delete($request)
    {
        $info = $this->get_info_by_id($request->info_id); //SubCategoryTrait
        $imageUrl = "images/info-site/".$info->logo;
        $info->delete();
        if ($info->logo)
        {
            unlink(public_path($imageUrl));
        }

        Session()->flash('done','Data Has Been Deleted');
        return redirect()->back();
    }
}
