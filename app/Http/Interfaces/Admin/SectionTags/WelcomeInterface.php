<?php
namespace App\Http\Interfaces\Admin\SectionTags;
use Illuminate\Http\Request;

interface WelcomeInterface
{
    public function index();
    public function create();
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request);
    public function destroy($id);
   
    
}