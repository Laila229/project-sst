<h2>Super Admin Dashboard</h2>
<ul>
    <li>All company:{{$companiesCount}}</li>
    <li>Active Companies:{{$activeCompanies}}</li>
    <li>expired Companies:{{$expiredCompanies}}</li>

    <li><a href="{{ route('super_admin.companies.index') }}">الشركات</a></li>
    <li><a href="{{ route('super_admin.companies.create') }}">اضافة شركة</a></li>
</ul>
