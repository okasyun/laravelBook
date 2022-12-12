@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Person</th><th>Board</th></tr>
        {{-- ひとつひとつの$itemがPersonモデルクラス --}}
        {{-- @foreach ($items as $item )
            <tr>
                <td>{{ $item->getData() }}</td>
                <td>@if ($item->board != null)
                    {{ $item->board->getData() }}
                    @endif
                </td>
                <td>
                    @if ($item->boards != null)
                    <table width="100%">
                        @foreach ($item->boards as $obj )
                        <tr><td>{{ $obj->getData() }}</td></tr>
                        @endforeach
                    </table>
                    @endif
                </td>
            </tr>
        @endforeach --}}
        @foreach ($hasItems as $item )
            <tr>
                <td>{{ $item->getData() }}</td>
                <td>
                    <table width="100%">
                        @foreach ($item->boards as $obj )
                            <tr><td>{{ $obj->getData() }}</td></tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        @endforeach
    </table>
    <div style="margin:10px;"></div>
    <table>
        <tr><th>Person</th></tr>
        @foreach ($noItems as $item )
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>    
        @endforeach
    </table>

@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection