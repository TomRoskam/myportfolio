@extends('layouts.app')

<ul class="buttonHome">
    <a class="btn btn-home text-white" role="button" href="/">Home</a>
</ul>

<div class="progressBackground bg-elegant-color-dark">

    <div class="studiemonitor">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="60" style="width: {{ ($block1->sum('ECwaarde') + $block2->sum('ECwaarde')) /60 * 100}}%">
            </div>
        </div>
        <div class="assen">
            <p class="zestig">60<i class="fas fa-graduation-cap"></i></p>
            <h5 class="ECwaarde" style="left: {{ ($block1->sum('ECwaarde') + $block2->sum('ECwaarde')) /60 * 100 -2.5}}%; transform: rotate(90deg); position: absolute; top: 35; color: white;"><i class="fas fa-arrow-left" style="margin-right: 5px;"></i>{{ $block1->sum('ECwaarde') + $block2->sum('ECwaarde') }}</h5>
            <p class="nul">0</p>
        </div>
    </div>

    <nav class="blockPicker">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" style="color: white;" href="/block1" role="tab" aria-controls="nav-home" aria-selected="true">Semester 1</a>
            <a class="nav-item nav-link active" href="/block2" role="tab" aria-controls="nav-profile" aria-selected="false">Semester 2</a>
        </div>
    </nav>

    <div class="card" style="width: 80vw; margin-top: -0.3vh; margin-left: auto; margin-right: auto;">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Propedeuse blok 1</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href="{{ url('/block2/create') }}">New result</a>
                </div>
            </div>
        </div>

        {{-- Content of card --}}
        <div class="card-body">
            <table class='table table-striped table-hover'>
                <thead>
                    {{-- Head of table --}}
                    <tr>
                        <th scope="col">Test</th>
                        <th scope="col">Grade</th>
                        <th scope="col">EC Value</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($block2 as $row)

                    {{-- Content of Table --}}
                    <tr>
                        <td>{{ $row->toets }}</td>
                        <td>{{ $row->cijfer }}</td>
                        <td>{{ $row->ECwaarde }}</td>
                        <td><a style="float: left;" class="action-button btn btn-warning btn-sm text-white" href="{{ url('block2/' . $row->id . '/edit') }}">update</a>
                            <form method="post" action="{{ url('block2/' . $row->id) }}">
                                @method('delete')
                                @CSRF
                                <button class="action-button btn btn-danger btn-sm text-white">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><br>
</div>
