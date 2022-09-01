@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
                <a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
                <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
            </div>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <div class="card-body">
        <div class="card-body">
            <h1 class="text-xl uppercase text-gray-500 mb-4" style="text-align: center;color: #45aaf2">Görev Güncelle</h1>
            <form action="{{route('tasks.update', $task->id)}}" method="POST">
            <table class="table table-bordered" id="dataTable" >
                <div style="width: 480px;"class="max-w-full mx-auto mt-10 px-4 py-8">
                    <form action="{{route('tasks.update', $task->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label class="block" for="task_name">Görev Konusu: </label>
                        <input class="w-full mb-2 rounded-lg " type="text" name="task_name"  value="{{$task->task_name}}">
                        @error('task_name')
                        <p class="text-base pb-4 ">{{$message}}</p>
                        @enderror
                        <label class="block" for="task_details">Görev İçeriği: </label>
                        <textarea type="text" name="task_details" style="height: 200px;width: 200px">{{$task->task_details}}</textarea>
                        @error('task_details')
                        <p class="text-base pb-4 text-red-400">{{$message}}</p>
                        @enderror
                        <form class="flex items-center gap-2" method="POST" action="{{route('mark')}}">
                            @csrf
                            <br>
                            <label class="block" for="task_details">Görev Durumu: </label>
                            <input  class="bg-gray-400 text-green-500" type="checkbox" name="id" value="{{$task->id}}" {{$task->task_status ? 'checked' : ''}}>
                            <input  type="hidden" name="id" value="{{$task->id}}" />
                        </form></span></td>
                        <div class="flex gap-4">
                            <button style="width: auto;background-color: #45aaf2">Güncelle</button>
                            <button href="{{route('tasks.todo')}}"  style="width: auto;background-color: #EF5858">İptal</button>
                        </div>
                    </form>
                </div>
            </table>
            </form>
            <div class="mt-8 text-center">
                <a href="{{route('tasks.todo')}}">
                    <svg class="w-8 inline hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
@endsection
@section('js')
@endsection
