@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Görev Listesi</h4>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12 col-xl-3 col-lg-4">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
                                        <h1 class="mt-4 mb-4 ml-4 mr-4 text-center">Görev oluştur</h1>
                                        <form action="{{route('tasks.store')}}" method="POST">
                                            @csrf
                                            <label class="block" for="task_name">Görev Konusu: </label>
                                            <input class="w-350 mb-2 rounded-lg bg-gray-400" type="text" name="task_name" value="{{old('task_name')}}">
                                            @error('task_name')
                                            <p class="text-base pb-4 text-red-400">{{$message}}</p>
                                            @enderror
                                            <label class="block" for="task_details">Görev İçeriği: </label>
                                            <textarea class="w-350 mb-2 rounded-lg h-48 bg-gray-400" type="text" name="task_details">{{old('task_details')}}</textarea>
                                            @error('task_details')
                                            <p class="text-base pb-4 text-red-400">{{$message}}</p>
                                            @enderror
                                            <div class="flex gap-4">
                                                <button class="block bg-gray-400 py-2 px-4 rounded-lg text-gray-350 hover:text-gree-500 focus:outline-none text-center w-350"  style="background-color: #38CB89" >Oluştur</button>
                                                <a href="{{route('tasks.todo')}}" class="block bg-gray-400 py-2 px-4 rounded-lg  focus:outline-none text-center w-350" style="background-color: #EF5858" >İptal</a>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
                                            <div class="card-body">
                                                <div>
                                                    <div class="input-icon">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="dataTable" >
                                                                <thead>
                                                                <tr>
                                                                    <th>Başlık</th>
                                                                    <th>İçerik</th>
                                                                    <th>Durum</th>
                                                                    <th>Oluşturulma Zamanı</th>
                                                                    <th>İşlemler</th>
                                                                </tr>
                                                                </thead>


                                                @include('partials.notifications')
                                                @foreach($tasks as $task)
													<tbody>
														<tr class="">
															<td>{{$task->task_name}}</td>
															<td>{{Str::limit($task->task_details,30)}}</td>
                                                            <td><span class="badge badge-success badge-pill">  <form class="flex items-center gap-2" method="POST" action="{{route('mark')}}">
                                                                @csrf
                                                                <input class="bg-gray-400 text-green-500" type="checkbox" name="id" value="{{$task->id}}" onClick="this.form.submit()" {{$task->task_status ? 'checked' : ''}}>
                                                                        <input type="hidden" name="id" value="{{$task->id}}" />
                                                            </form></span></td>
                                                            <td class="view-message dont-show font-weight-semibold">{{$task->created_at}}</td>
                                                            <td>
                                                                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button style="width: 100px;background-color: #EF5858;"   onclick="return confirm('bu görevi silmek istediğinizden emin misiniz?')">
                                                                        <a>Delete</a>
                                                                    </button>
                                                                </form>
                                                                <form action="{{route('tasks.todo.edit', $task->id)}}" method="get">
                                                                    @csrf
                                                                <div class="mt-4 flex justify-left items-center gap-5">
                                                                    <button style="width: 100px;background-color: #ecb403;">
                                                                        <a class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                                                    </button>
                                                                </div>
                                                                </form>
                                                                <form action="{{route('tasks.todo.view', $task->id)}}" method="get">
                                                                    @csrf
                                                                    <div class="mt-4 flex justify-left items-center gap-5">
                                                                        <button style="width: 100px;background-color: #45aaf2">
                                                                            <a class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">view</a>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </td>
														</tr>
                                                    </tbody>
                                                                @endforeach
                                                            </table>
                                                            {{ $tasks->links()}}
                                                        </div>
                                                    </div>
                                                </div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection
