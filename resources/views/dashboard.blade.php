<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center justify-center">
            @foreach ($host as $ho)    
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width:100%; max-width: 500px !important;">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">{{$ho->name}}</th>
                            <th scope="col">
                                <form method="get" action="/Hosts/AddAttribute">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$ho->id}}">
                                    <button type="submit" class="btn btn-success"> Edit</button>
                                </form>
                                <form method="Post" action="/Hosts/delete">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$ho->id}}">
                                    <button type="submit" class="btn btn-danger"> Delete</button>
                                </form>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @empty(!$ho->Host_detail)
                                    
                                @foreach ($ho->Host_detail as $h)
                                <tr>
                                    <th scope="row">{{$h->HostAttributekey}}</th>
                                    <td>{{$h->HostAttributeValue}}</td>
                                </tr>
                                @endforeach

                                @endempty
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <br><br><br>
            @endforeach
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form dir="rtl" method="post" action="/Hosts/store">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input name="name" type="string" class="form-control" id="name">
                            <div id="emailHelp" class="form-text">we need a name for create a new Host</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
