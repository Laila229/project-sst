<h2>company</h2>
<table border="1" >
    <tr>
        <th>company name</th>
        <th>owner name</th>
        <th>phone</th>
        <th>Status</th>
        <th>Subscription period</th>
        <th>action</th>
    </tr>
    @foreach ($companies as $company)

    <tr>
        <td> {{$company->name}} </td>
        <td> {{$company->owner_name}} </td>
        <td> {{$company->phone}} </td>
        <td> {{$company->is_active ? 'Active':'Non-Active'}} </td>
        <td> {{$company->start_date}} -> {{$company->end_date}} </td>
        <td>
            <a href="{{route('super_admin.companies.edit',$company)}}">Edit</a>

            <form method="POST" action="{{route('super_admin.companies.toggle',$company)}}">
                @csrf
                @method('PATCH')
                <button type="submit">
                    {{$company->is_active?'Active':'Non-active'}}
                </button>
            </form>
        </td>
    </tr>
        
    @endforeach
</table>