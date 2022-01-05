<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\PartnerInterface;
use App\Http\Traits\ImagesTrait;
use App\Http\Traits\PartnerTrait;
use App\Models\Partner;
use Illuminate\Support\Facades\Session;

class PartnerRepository implements PartnerInterface
{
    use ImagesTrait;
    use PartnerTrait;

    private $partnerModel;

    public function __construct(Partner $partner)
    {
        $this->partnerModel = $partner;
    }

    public function index()
    {
        $partners = $this->show_all_partners();
        return view('Dashboard.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('Dashboard.partner.create');
    }

    public function store($request)
    {
        $image = $request->file('logo');
        $imageName = time(). '_' . '.' . $image->getClientOriginalExtension();
        $this->uploadImage($image, $imageName, 'partners'); //ImagesTrait
        $this->partnerModel::create([
            'name' => ['en' => $request->en_name, 'ar' => $request->ar_name],
            'link' => $request->link,
            'image' => $imageName
        ]);

        Session::flash('done', 'Data Inserted Successfully');
        return redirect(route('admin.partner.index'));
    }

    public function edit($id)
    {
        $partner = $this->get_partner_by_id($id);
        return view('Dashboard.partner.edit', compact('partner'));
    }

    public function update($request)
    {
        $partner = $this->get_partner_by_id($request->partner_id);
        if ($request->hasFile('logo')) {
            $image =$request->file('logo');
            $imageName = time(). '_' . '.' . $image->getClientOriginalExtension();
            $oldPath = 'images/partners/'. $partner->logo;
            $this->uploadImage($image,$imageName, 'partners', $oldPath); //ImagesTrait
        }

        $partner->update([
            'name' => ['en' => $request->en_name, 'ar' => $request->ar_name],
            'link' => $request->link,
            'image' => (isset($imageName)) ? $imageName : $partner->image
        ]);

        Session()->flash('done','Data Has Been Updated');
        return redirect(route('admin.partner.index'));

    }

    public function destroy($request)
    {
        $partner = $this->get_partner_by_id($request->partner_id);
        $imageUrl = "images/partners/".$partner->image;
        $partner->delete();
        if ($partner->image)
        {
            unlink(public_path($imageUrl));
        }

        Session()->flash('done','Data Has Been Deleted');
        return redirect()->back();
    }
}
