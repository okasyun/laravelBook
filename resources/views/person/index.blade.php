@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Data</th></tr>
        {{-- ひとつひとつの$itemがPersonモデルクラス --}}
        @foreach ($items as $item )
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>

@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection