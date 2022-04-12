
@extends('Layouts.main.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<!-- <div class="card uper"> -->
<div class="card-header">
    <h3>Create Customer</h3>
</div>
<div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
    <form action="customers" method="POST">

        <div class="form-group">
            @csrf
            <label for="name">Customer Name:</label>
            <input type="text" class="form-control" name="name" id="title" />
        </div>
        <div class="form-group">
            <label for="email">Customer Email:</label>
            <textarea name="email" id="body" class="form-control"></textarea>

        </div>
        <div class="form-group">
            <label for="status">Customer Status:</label>
            <select name="active" id="active">
                <option value="" disabled>Select Customer Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <div class="form-group">
            <label for="company_id">Company:</label>
            <select name="company_id" id="company_id">
                @foreach ($companies as $company)
                    <option value="{{ $company->id}}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

<div class="row">
    <div class="col-6">
        <h3>Active Customer</h3>

        <ul>
            @foreach($activeCustomers as $activeCustomer)

                <li>{{ $activeCustomer->name}} <span class="text-muted">({{ $activeCustomer->company->name}})</li>

            @endforeach   
        </ul>
    </div>

    <div class="col-6">
        <h3>Inactive Customer</h3>

        <ul>
            @foreach($inactiveCustomers as $inactiveCustomer)

           
                <li>{{ $inactiveCustomer->name}} <span class="text-muted">({{ $inactiveCustomer->company->name}})</li>

            @endforeach   
        </ul>
    </div>

</div>
@endsection