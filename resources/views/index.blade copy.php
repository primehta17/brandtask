@extends('layout')

@section('main-content')


<div class="row">
    <div class="col-md-6">
        <div class="bg-white p-3 top-space">
            <div class="float-start">

                <h4 class="pb-3">My Tasks ({{ str_pad(count($tasks), 2, '0', STR_PAD_LEFT) }})</h4>

            </div>
            <div class="float-end m-1">
                <button class="btn btn-white" id="toggle-form">
                    <i class="fa fa-plus " style='font-size:30px;'></i>
                </button>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card-container" id="sortable-list">

            @foreach ($tasks as $task)

            <div class="card">
                <div class="card-body">
                    <div class="card-text">

                        <div class="float-start">
                            <span class="m-4">{{ sprintf('%02d', $task->id) }}</span>
                            @if ($task->status === 'Todo')
                            {{ $task->title }}
                            @else
                            <del>{{ $task->title }}</del>
                            @endif
                        </div>
                        <div class="float-end" style="display: flex; align-items: center; margin-right: 10px;">
                            @if ($task->status === 'Todo')
                            <div class="circle-icons" style="margin-right: 5px;">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            @else
                            <div class="circle-icon" style="margin-right: 5px;">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            @endif

                            <form action="{{ route('task.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete ?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if (count($tasks) === 0)
        <div class="alert alert-danger p-2">
            No Task Found. Please Create one task
        </div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="card card-body bg-light p-4" id="create-task-form" style="display: none;">
            <button type="button" class="close" aria-label="Close" id="close-form">&times;</button>
            <label for="title" class="form-label">Create task</label>
            <form action="{{ route('task.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                </div>
                <div class="mb-3">
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" rows="5"></textarea>
                </div>
                <div class="mb-3">

                    <select name="status" id="status" class="form-control">
                        @foreach ($statuses as $status)
                        <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success full-length-btn">
                    Create Task
                </button>
            </form>
        </div>
    </div>
</div>


































































































































@endsection