@extends('back.home')
@section('content')
    <div class="card pd-20 pd-sm-40">
        <form action="{{url('/contactEmail')}}" method="POST">
            {{csrf_field()}}



            <div class="card-header card-header-default">
                Contact
            </div>

            <div class="row mg-t-20">
                <label class="col-sm-1"></label>
                <label class="col-sm-3 form-control-label">Contact Email : <span class="tx-danger">*</span></label>
                <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                    <input type="email" class="form-control"  placeholder="Ecrire email de contact" required name="email" />
                </div>
            </div>
            <div class="row row-xs mg-t-30">
                <div class="col-sm-8 mg-l-auto">
                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info mg-r-5" >Ajouter Un Email</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
