<div class="p-5 rounded bg-white container-fluid" style="margin-top: -70px!important">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width: max-content">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong class="d-flex align-items-center"><i class="fas fa-check-circle mr-sm-2 mr-md-3 fa-2x"></i> <span>{{ session('success') }}</span> </strong>
        </div>
    @endif
    <form wire:submit.prevent="submit" class="row justify-conter-between">
        <div class="col-md-4 pr-1">
            <div class="form-group my-1 mx-0">
                <label class="mb-0 p-0" for="code">Course Code</label>
                <input type="text" wire:model="code" id="code" class="form-control" placeholder=""
                    value="{{ old('code') }}">
                @error('code')
                    <small class="text-danger font-weight-bold m-0 p-0">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-4 pr-1">
            <div class="form-group my-1 m-0">
                <label class="mb-0 p-0" for="title">Course Title</label>
                <input type="text" wire:model="title" id="" class="form-control" placeholder=""
                    value="{{ old('title') }}">
                @error('title')
                    <small class="text-danger font-weight-bold m-0 p-0">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-4 pr-1">
            <div class="form-group my-1 m-0">
                <label class="mb-0 p-0" for="unit">Course Unit</label>
                <input type="number" wire:model="unit" id="unit" class="form-control" placeholder=""
                    value="{{ old('unit') }}">
                @error('unit')
                    <small class="text-danger font-weight-bold m-0 p-0">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12 my-2">
            <button type="submit" class="btn mt-1 btn-primary rounded">Add Course</button>
        </div>
    </form>

    {{-- course table --}}
</div>

<div class="p-5 rounded bg-white container-fluid" style="margin-top: -70px!important">
    <div class="card text-left">
        <div class="card-header d-flex justify-content-between">
            <h3>Coures</h3>
            {{-- <small>{{ $courses->links() }}</small> --}}
        </div>
        <div class="card-body  table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Course Unit</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->unit }}</td>
                            <td class="d-flex justify-content-around align-items-center">
                                <a wire:click="edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="fa fa-trash btn btn-sm btn-danger"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
