@extends('layouts.admin-index')
@section('content')
<div class="container">
    <!-- Task Form -->
    <div class="card mb-4">
        <div class="card-header">Create New Task</div>
        <div class="card-body">
            <form id="taskForm" action="{{ route('task.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="taskTitle" class="form-label">Task Title</label>
                    <input type="text" class="form-control" id="taskTitle" required name="title">
                </div>
                <div class="mb-3">
                    <label for="taskDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="taskDescription" rows="3"></textarea name="description">
                </div>
                <div class="mb-3">
                    <label for="taskPriority" class="form-label">Priority</label>
                    <select class="form-select" id="taskPriority" required name="priority">
                        <option value="Low">Low</option>
                        <option value="Medium" selected>Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="taskDueDate" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="taskDueDate" name="due_date">
                </div>
                <div class="mb-3">
                    <label for="taskAssignee" class="form-label">Assignee</label>
                    <input type="text" class="form-control" id="taskAssignee" name="assignee">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select class="form-select" id="#" required name="status">
                        <option value="pending">Pending</option>
                        <option value="in_progress" selected>In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Task</button>
            </form>
        </div>
    </div>
    <!-- Task List -->
    <div class="card">
        <div class="card-header">Task List</div>
        <div class="card-body">
            <ul class="list-group" id="taskList">
                <!-- Task items will be appended here -->

            </ul>
        </div>
    </div>
</div>

@endsection
