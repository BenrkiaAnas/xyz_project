@extends('dashboard')
@section('content')
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">{{__('Liste des Fqs')}}</h6>
            <p class="mg-b-20 mg-sm-b-30"></p>
    
            <div class="table-wrapper">
              <table id="datatable1" class="table display table-striped table-bordered table-hover responsive nowrap">
                <thead class="bg-info">
                  <tr>
                    <th class="wd-15p">{{__('Question')}}</th>
                    <th class="wd-15p">{{__('Reponse')}}</th>
                    <th class="wd-15p">{{__('اسئلة')}}</th>
                    <th class="wd-15p">{{__('اجوبة')}}</th>
                    <th class="wd-15p">{{__('Etat')}}</th>
                    <th class="wd-15p">{{__('Actions')}}</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($faqs as $faq )
                    <tr> 
                            <td data-toggle="tooltip" title="{{$faq['question']['fr']}}">{{str_limit($faq['question']['fr'],15,'...')}}</td>
                            <td data-toggle="tooltip" title="{{$faq['reponse']['fr']}}">{{str_limit($faq['reponse']['fr'],15,'...')}}</td>
                            <td data-toggle="tooltip" title="{{$faq['question']['ar']}}">{{str_limit($faq['question']['ar'],15,'...')}}.</td>
                            <td data-toggle="tooltip" title="{{$faq['reponse']['ar']}}">{{str_limit($faq['reponse']['ar'],15,'...')}}</td>
                            <td  style="text-align: center" id="td_{{$faq['id']}}">
                              @if($faq['status']==0)
                               <i class="fa fa-power-off x2 mouseHover" style="color: red;font-size:24px" onclick="activeDesactive('{{$faq['id']}}',1)"></i>
                              @else
                               <i class="fa fa-power-off x2 mouseHover" style="color: green;font-size:24px" onclick="activeDesactive('{{$faq['id']}}',0)"></i>
                              @endif
                            </td>
                            <td>
                                <a href="{{url('editFaq/'.$faq['id'])}}" class="btn btn-primary btn-icon rounded-circle ">
                                    <div><i class="fa fa-pencil"></i></div>
                                </a>
                               {{--<a href="{{url('/faqs/show/'.$faq->id)}}" class="btn btn-primary btn-icon rounded-circle ">
                                    <div><i class="fa fa-folder-open" aria-hidden="true"></i>
                                    </div>
                                </a>--}}
                            </td>
                          </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
    <script>
    $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: '{!! __("Rechercher") !!}',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
        });
    
    function activeDesactive(id,status)
        {   
         $.ajax({
            url: '/faqs/activeDesactive',
            data:{ "_token": "{{ csrf_token() }}",id:id,status:status},
            type: "GET",
            success: function(data){
                if(status == 0)
                {
                    $("#td_"+id).html("<i class='fa fa-power-off x2 mouseHover' style='color: red;font-size:24px' onclick='activeDesactive("+id+",1)'></i>");
                }else{
                    $("#td_"+id).html("<i class='fa fa-power-off x2 mouseHover' style='color: green;font-size:24px' onclick='activeDesactive("+id+",0)'></i>");
                }
                console.log(data)
            }, 
           error: function (data) {
                console.log(data)
                }
        });
        }
    
      </script>
    @endsection
