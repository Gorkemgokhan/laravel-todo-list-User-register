<x-app-layout>
    <div style="width: 480px;"class="max-w-full mx-auto mt-10 px-4 py-8 text-gray-500">
        <h1 class="text-xl uppercase text-gray-500 mb-4">Görev Güncelleme</h1>
        <form action="{{route('tasks.update', $task->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label class="block" for="task_name">Görev Konusu: </label>
            <input class="w-full mb-2 rounded-lg bg-gray-200" type="text" name="task_name" value="{{$task->task_name}}">
            @error('task_name')
                <p class="text-base pb-4 text-red-400">{{$message}}</p>
            @enderror
            <label class="block" for="task_details">Görev İçeriği: </label>
            <textarea class="w-full mb-2 rounded-lg h-48 bg-gray-200" type="text" name="task_details">{{$task->task_details}}</textarea>
            @error('task_details')
                <p class="text-base pb-4 text-red-400">{{$message}}</p>
            @enderror
            <div class="flex gap-4">
                <button class="block bg-gray-400 py-2 px-4 rounded-lg text-gray-100 hover:text-gray-500 focus:outline-none" style="background-color: #3A3878">Güncelle</button>
                <a href="{{route('tasks.index')}}" class="block bg-red-500 py-2 px-4 rounded-lg text-gray-100 hover:bg-red-400 focus:outline-none">İptal</a>
            </div>
        </form>
    </div>
</x-app-layout>
