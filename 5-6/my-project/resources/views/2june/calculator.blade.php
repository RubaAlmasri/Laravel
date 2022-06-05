@extends ('2june.master')




@section('content')

<section class="vh-100 gradient-custom" style="margin-bottom: 10%;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-light " style="border-radius: 1rem;">
                    <div class="card-body p-5">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase text-center">Simple Calculator</h2>

                            <p class="text-white-50 mb-5"></p>
                            <form class="mb-5" method="get" action="">
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label">Number 1</label>
                                    <input type="number" name="num1" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Number 2</label>
                                    <input type="number" name="num2" class="form-control form-control-lg" />
                                </div>

                                <input type="submit" name="operator" value="Sum" />
                                <input type="submit" name="operator" value="Subtraction" />
                                <input type="submit" name="operator" value="Multiplication" />
                                <input type="submit" name="operator" value="Division" />
                            </form>
                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typePasswordX">The answer is</label>
                                <input readonly="readonly" name="result" class="form-control form-control-lg" value="{{$answer}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection