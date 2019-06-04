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
            <h5 class="EC_waarde" style="left: {{ ($block1->sum('ECwaarde') + $block2->sum('ECwaarde')) /60 * 100 -2.5}}%; transform: rotate(90deg); position: absolute; top: 35; color: white;"><i class="fas fa-arrow-left" style="margin-right: 5px;"></i>{{ $block1->sum('ECwaarde') + $block2->sum('ECwaarde') }}</h5>
            <p class="nul">0</p>
        </div>
    </div>


    <div class="card" style="width: 80vw; margin-left: auto; margin-right: auto;">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Update an existing result of Propedeuse blok 1</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href="{{ url('/block1') }}">Go back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="needs-validation" action="{{ url('/block1/' . $block1->id) }}" method="post" novalidate>
                @method('patch')
                @csrf
                <label for="validationCustom01">Test</label>
                <input type="text" name="toets" class="form-control" id="validationCustom01" value="{{$block1->toets}}"
                required>
                <div class="invalid-feedback">
                    Please enter a test.
                </div>
    
                <label for="validationCustom02">Grade</label>
                <input type="number" name="cijfer" class="form-control" id="validationCustom02" value="{{$block1->cijfer}}"
                required>
                <div class="invalid-feedback">
                    Please enter a grade.
                </div>
                     
                <label for="validationCustom03">Credits</label>
                <input type="number" name="ECwaarde" class="form-control" id="validationCustom03" value="{{$block1->ECwaarde}}"
                required>
                <div class="invalid-feedback">
                    Please enter credits.
                </div>
                <br>
                <button class="btn btn-success btn-add" type="submit">Add new result</button>
            </form>
        </div>
    </div>
</div>

<script rel="text/javascript">
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>