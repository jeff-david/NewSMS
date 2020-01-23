@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content--bgf7">
                        <section class="statistic statistic2">
                            <div class="container">
                                <div class="row" id="subjects">
                                    @foreach($subject as $subjects)
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item statistic__item text-center" style="background-color:{{$subjects->color}}">
                                            <span class="desc">{{$subjects->subject_name}}</span>
                                            <br>
                                            <button type="button" class="btn btn-info mb-1" style="background-color:{{$subjects->color}}" data-toggle="modal"
                                                data-target="#staticModal">Assign</button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Assign Teacher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text center">
                    <div class="rs-select2--light rs-select2--md">
                        <select name="" id="" class="form-control" style="width: 250px;margin-left: -45px;">
                            <option value="">Select Teacher</option>
                            <option value="">Ms. Labiste</option>
                            <option value="">Ms.Clamonte</option>
                            <option value="">Mr. Potrido</option>
                            <option value="">Ms. Requela</option>
                            <option value="">Ms. Bontilao</option>
                            <option value="">Mr. Banadalan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Assign</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection