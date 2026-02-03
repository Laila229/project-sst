<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\View\View;   

class DashboardController extends Controller
{
    public function index()    {
        $companiesCount = Company::count();
        $activeCompanies = Company::where('is_active', 1)->count();
        $expiredCompanies = Company::where('end_date','<', now())->count();

        return view('super_admin.dashboard', compact('companiesCount', 'activeCompanies', 'expiredCompanies'));
    }
}
