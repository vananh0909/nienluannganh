@extends('Admin.Clients.ClientAd')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div style=" flex: 1;padding-left: 104px;">
        <header>
            @include('Admin.layoutsAd.HeaderAd')
        </header>
    </div>
    <main>
        <div>
            <h1 style="font-size:24px; text-align:center; font-weight:400; padding-top: 20px; padding-bottom:20px">
                PHÂN LỊCH TRỰC

            </h1>

        </div>
        @if (session('status'))
            <h4 style="width: 750px; height:30px; margin: 0 auto;font-size:20px; text-align:center; padding-bottom:40px"
                class="alert alert-success">
                {{ session('status') }}</h4>
        @endif


        <form method="POST" action="{{ route('Admin.postlichtruc') }}">
            @csrf
            <table class="table table-striped" style="width: 50%; margin: 0 auto; ">

                <tbody>

                    <tr>
                        <th scope="row">Tên Bác Sĩ</th>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="lt_tenbacsi" required>
                                <option selected>Tên Bác sĩ</option>
                                @foreach ($bacsi as $bs)
                                    <option value="{{ $bs->NV_Ten }}">{{ $bs->NV_Ten }}</option>
                                @endforeach

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Ngày Trực</th>
                        <td><input type="date" name="lt_Ngaytruc" class="form-control" required> </td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td>
                            <button type="submit" class="btn btn-primary" style="margin-left: 5px">Thêm Lịch Trực</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>

        </form>


        <div>
            <h1 style="font-size:24px; text-align:center; font-weight:400; padding-top: 35px; padding-bottom:40px">
                LỊCH TRỰC </h1>


        </div>


        <table class="table table-striped" style="width: 100%;margin: 0 auto">
            <thead>
                @foreach ($lichtruc as $lt)
                    <tr>
                        <th scope="col">Ngày Trực</th>
                        <th scope="col">Tên Bác Sĩ</th>
                        <th scope="col">Hành Động</th>

                    </tr>
            </thead>
            <tbody>

                <tr>
                    <td> {{ $lt->lt_Ngaytruc }}</td>
                    <td>{{ $lt->lt_tenbacsi }} </td>

                    <td>
                        <a href="{{ route('Admin.sualichtruc', ['id' => $lt->lt_Id]) }}" class="btn btn-primary"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <a href="{{ route('Admin.xoalichtruc', ['id' => $lt->lt_Id]) }}" class="btn btn-danger"><i
                                class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>


    </main>
    </div>



    </div>
@endsection


@section('css')
@endsection
