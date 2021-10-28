<div class="table-responsive">
    <table class="table" id="enrollments-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Lastname</th>
        <th>Mi</th>
        <th>Course</th>
        <th>Year</th>
        <th>Date Of Birth</th>
        <th>Current Address</th>
        <th>Email Address</th>
        <th>Phone Number</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->Firstname }}</td>
            <td>{{ $enrollment->Lastname }}</td>
            <td>{{ $enrollment->MI }}</td>
            <td>{{ $enrollment->course }}</td>
            <td>{{ $enrollment->year }}</td>
            <td>{{ $enrollment->date of birth }}</td>
            <td>{{ $enrollment->current address }}</td>
            <td>{{ $enrollment->email address }}</td>
            <td>{{ $enrollment->phone number }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['enrollments.destroy', $enrollment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('enrollments.show', [$enrollment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('enrollments.edit', [$enrollment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
