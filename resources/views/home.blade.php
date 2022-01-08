@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" class="needs-validation" action="/enkripsi">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Text yang di encrypt/decrypt</label>
                                <input class="form-control" type="text" name="input1" value="{{ old('input1')}}" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Latitude</label>
                                <input class="form-control form-control-clicked" readonly="readonly" type="text" aria-label="Latitude" id="latt" required placeholder="Latitude">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Longitude</label>
                                <input class="form-control form-control-clicked" readonly="readonly" type="text" aria-label="Longitude" id="longg" required placeholder="Longitude">
                            </div>
                        </div>
                        <button class="btn btn-primary col-12" type="submit">Submit form</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
