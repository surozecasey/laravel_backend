<x-app-layout>
    <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Details</h5>
                {{--if/else statement in short
                     {{ $info->name === "Luxury Builders" ? "Hi" : "Goodbye" }}
                 --}}


                    <a href="{{ route('company.create') }}" class="btn btn-primary">Create Company</a>


            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Logo</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th>PAN</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>{{ $info->id }}</td>
                        <td><img src="{{ asset($info->image) }}" width="100" alt=""></td>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->address }}</td>
                        <td>{{ $info->pan }}</td>
                        <td>{{ $info->email }}</td>
                        <td><a href="{{ route('company.edit', $info->id) }}">Edit</a></td>

                    </tbody>
                </table>
            </div>
    </div>
</x-app-layout>
