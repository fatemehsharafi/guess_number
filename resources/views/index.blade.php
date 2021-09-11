@extends('layouts.main')
@section('content')
    <x-header/>
    <div class="col-12">
        <div class="d-flex flex-row justify-content-center row">
            @for( $i=1; $i < 4; $i++)
                <x-guess-number.card :user-id="$i"/>
            @endfor
        </div>
    </div>
    <x-guess-number.modal/>
@endsection
@section('js')
    <script>
        const checkNumberUrl = "{{ route('check.number') }}";
        const regenerateNumberUrl = "{{ route('regenerate.number') }}";
    </script>
    <script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
@endsection
