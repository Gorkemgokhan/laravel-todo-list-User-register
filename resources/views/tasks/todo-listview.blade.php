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
                    <h1 class="text-xl uppercase text-gray-500 mb-4" style="color: whitesmoke">Görev</h1>
                    <table class="table table-bordered" id="dataTable" >
                        <thead>
                        <tr style="background-color: #EF5858" class="text-center">
                            <th>Başlık</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-center">
                            <td class="px-2 py-4">{{$task->task_name}}</td>
                        </tr>
                        <thead>
                        <tr style="background-color: #45aaf2" class="text-center">
                            <th>İçerik</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-center">
                            <td class="px-2 py-4">{{$task->task_details}}</td>
                        </tr>
                        </tbody>
                        <thead>
                        <tr style="width: 100px;background-color: #ecb403" class="text-center">
                            <th>Durum</th><br>
                        </tr>
                        </thead>
                        <td class="text-center"><span class="badge badge-success badge-pill">  <form class="flex items-center gap-2" method="POST" action="{{route('mark')}}">
                                                                @csrf
                                                                <input class="bg-gray-400 text-green-500" type="checkbox" name="id" value="{{$task->id}}" onClick="this.form.submit()" {{$task->task_status ? 'checked' : ''}}>
                                                                        <input type="hidden" name="id" value="{{$task->id}}" />
                                                            </form></span></td>
                        <thead>
                        <tr style="background-color: #2dce89" class="text-center">
                            <th>Oluşturulma Zamanı</th><br>
                        </tr>
                        <td class="view-message dont-show font-weight-semibold text-center">{{$task->created_at}}</td>
                        </thead>
                    </table>
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
