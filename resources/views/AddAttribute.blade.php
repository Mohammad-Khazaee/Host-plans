<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center justify-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width:100%; max-width: 500px !important;">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">{{$host->name}}</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @empty(!$host->Host_detail)
                                    
                                @foreach ($host->Host_detail as $h)
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

                    <form method="get" action="/Hosts/AddAttribute/store">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text">attribute key</span>
                            <input name="HostAttributekey" type="text" class="form-control">

                            <span class="input-group-text">attribute value</span>
                            <input name="HostAttributeValue" type="text" class="form-control">
                        </div> <br><br>
                        <input type="hidden" name="host_id" value="{{$id}}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
