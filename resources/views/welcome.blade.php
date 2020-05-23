@extends('layout.main')
@section('content')
    <h1>Hompage</h1> <br><br>

@if (session('successMsg'))

<div class="alert alert-success" role="alert">
    {{ session('successMsg')}}
  </div>

@endif

<div class="container">
<table id="dt-fixed-footer" class="table" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">#
        </th>
        <th class="th-sm">First Name
        </th>
        <th class="th-sm">Last Name
        </th>
        <th class="th-sm">Email
        </th>
        <th class="th-sm">Phone
        </th>
        <th class="th-sm">Action
        </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
        <td>{{ $student -> id}}</td>
        <td>{{ $student -> first_name}}</td>
        <td>{{ $student -> last_name }}</td>
        <td>{{ $student -> email}}</td>
        <td>{{ $student -> phone}}</td>
        <td> <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit', $student ->id )}}"> <i class="fa fa-pencil-square-o" aria-hidden="true"> </i>
        </a> 
        || 
        <form action="{{ route('delete', $student ->id )}}" method="POST" id="delete-form-{{ $student->id }}" style="display:none;">
            {{ csrf_field() }}
            {{ method_field('delete') }}
        </form>

        <button onclick="if(confirm('Are you sure you want to delete this data?')) {
            event.preventDefault();
            document.getElementById('delete-form-{{ $student->id }}').submit();
            } else {
              event.preventDefault();
            }
             "class="btn btn-raised btn-danger btn-sm" href=""> 
                <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
       </td>
        </tr>
      @endforeach
    </tbody>
</table>
   {{ $students->links() }}

</div>

@endsection