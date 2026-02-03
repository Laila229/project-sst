<h2>Add company</h2>

<form method="POST" action="{{route('super_admin.companies.store')}}">
    @csrf
    Company name:<input name="name" type="text" placeholder="Company name"><br>
    Owner name:<input name="owner_name" type="text" placeholder="owner name"><br>
    phone number:<input name="phone" type="text" placeholder="07******"><br>

    start date: <input type="date" name="start_date"><br>
    End date: <input type="date" name="end_date"><br>

    Note: <textarea name="notes" placeholder="add notes"></textarea><br>

    <button type="submit">Save</button>
</form>