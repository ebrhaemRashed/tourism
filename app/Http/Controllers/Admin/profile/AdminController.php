<?php
namespace App\Http\Controllers\Admin\profile;

use App\Actions\Admins\StoreAdminAction;
use App\Actions\Admins\UpdateAdminAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admins\StoreAdminRequest;
use App\Http\Requests\Admin\Admins\UpdateAdminRequest;
use App\Models\Admin;
use App\ViewModels\AdminsView\AdminViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(Request $request):View
    {
        $data = Admin::Search();
        return view('admin.admins.view',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create():View
    {
        return view('admin.admins.crud',new AdminViewModel());
    }
    public function store(StoreAdminRequest $request):RedirectResponse
    {
        app(StoreAdminAction::class)->handle($request->validated());
        return redirect()->route('admin.admins.index')->with('add','Success Add Admin');
    }
    public function edit(Admin $admin):View
    {
        return view('admin.admins.crud',new AdminViewModel($admin));
    }
    public function update(UpdateAdminRequest $request, Admin $admin):RedirectResponse
    {
        app(UpdateAdminAction::class)->handle($admin,$request->validated());
        return redirect()->route('admin.admins.index')->with('edit','Update Admin');
    }
    public function destroy(Admin $admin):RedirectResponse
    {
        $admin->delete();
        return redirect()->route('admin.admins.index')->with('delete','Success  Delete');
    }
}
