@extends('dashboard')
@section('content')
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">{{__('Liste des Fqs')}}</h6>
            <p class="mg-b-20 mg-sm-b-30"></p>
    
            <div class="table-wrapper">
              <table id="datatable1" class="table display table-striped table-bordered table-hover responsive nowrap">
                <thead class="bg-info">
                  <tr>
                    <th class="wd-15p">{{__('Image')}}</th>
                    <th class="wd-15p">{{__('lieu')}}</th>
                    <th class="wd-15p">{{__('المكان')}}</th>
                    <th class="wd-15p">{{__('description')}}</th>
                    <th class="wd-10p">{{__('الوصف')}}</th>
                    <th class="wd-10p">{{__('Actions')}}</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($gallerys as $gallery )
                    <tr> 
                    <td><img width="75" height="75" src="{{asset('/img/'.$gallery['image'])}}"></td>
                    <td>{{$gallery['lieu']['fr']}}</td>
                            <td>{{$gallery['lieu']['ar']}}</td>
                            <td>{{$gallery['description']['fr']}}</td>
                            <td>{{$gallery['description']['ar']}}</td>
                            <td  style="text-align: center" id="td_{{$gallery['id']}}">
                              @if($gallery['id']==0)
                               <i class="fa fa-power-off x2 mouseHover" style="color: red;font-size:24px" onclick="activeDesactive('{{$gallery['id']}}',1)"></i>
                              @else
                               <i class="fa fa-power-off x2 mouseHover" style="color: green;font-size:24px" onclick="activeDesactive('{{$gallery['id']}}',0)"></i>
                              @endif
                            </td>
                          </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <img src="App::/getImage(Pos1" >
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
            url: '/glist/activeDesactive',
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