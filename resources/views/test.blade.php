@extends('dashboard')
@section('content')

<section id="the-gallery" class="wide-gallery inner-gallery section-inner">
    <div class="container">
        <!-- section title -->
        <div class="row">
            <div class="col-sm-4 mix">
                <div class="item port-popup" id="upload-demo_0" style="width:350px;background-image:url('https://dummyimage.com/380x209/000/fff')"></div>
                <input type="file" onchange="onChangeImage(event,0,'btn_1',319.98,175.98)">
                <button id="btn_1" class="btn btn-success upload-result_0" style="display:none" required>Apercu</button>
                <div id="upload-demo-i_0" style="background:#e1e1e1;width:319.98px;height:175.98px;margin-top:30px"></div>
            </div>
            <div class="col-sm-4 mix">
                <div class="item port-popup" id="upload-demo_3" style="width:350px;background-image:url('https://dummyimage.com/380x209/000/fff')"></div>
                <input type="file" onchange="onChangeImage(event,3,'btn_4',319.98,175.98)">
                <button id="btn_4" class="btn btn-success upload-result_3" style="display:none" required>Apercu</button>
                <div id="upload-demo-i_3" style="background:#e1e1e1;width:319.98px;height:175.98px;margin-top:30px"></div>
            </div>
             
            <div class="col-sm-4 mix">
                <div class="item port-popup" id="upload-demo_4" style="width:350px;background-image:url('https://dummyimage.com/380x209/000/fff')"></div>
                <input type="file" onchange="onChangeImage(event,4,'btn_5',319.98,175.98)">
                <button id="btn_5" class="btn btn-success upload-result_4" style="display:none" required>Apercu</button>
                <div id="upload-demo-i_4" style="background:#e1e1e1;width:319.98px;height:175.98px;margin-top:30px"></div>
            </div>

            <div class="col-sm-4 mix">
                <div class="item port-popup" id="upload-demo_1" style="width:350px;background-image:url('https://dummyimage.com/380x209/000/fff')"></div>  
                <input type="file" onchange="onChangeImage(event,1,'btn_2',319.98,175.98)">
                <button id="btn_2" class="btn btn-success upload-result_1" style="display:none" required>Apercu</button>
                <div id="upload-demo-i_1" style="background:#e1e1e1;width:319.98px;height:175.98px;margin-top:30px"></div>
            </div>
            <div class="col-sm-4 mix" >
                <div class="item " id="upload-demo_2" style="width:400px;background-image:url('https://dummyimage.com/380x418.2/807680/fff')"></div>
                <input type="file" onchange="onChangeImage(event,2,'btn_3',380,418.2)">
                <button id="btn_3" class="btn btn-success upload-result_2" style="display:none" required>Apercu</button>
                <div id="upload-demo-i_2" style="background:#e1e1e1;width:380px;height:418.2px;margin-top:30px"></div>
            </div>

            <div class="col-sm-6 mix">
                <div class="item " id="upload-demo_5" style="width:400px;background-image:url('https://dummyimage.com/380x418.2/807680/fff')"></div>
                <input type="file" onchange="onChangeImage(event,5,'btn_6',570,313.5)">
                <button id="btn_6" class="btn btn-success upload-result_5" style="display:none" required>Apercu</button>
                <div id="upload-demo-i_5" style="background:#e1e1e1;width:570px;height:313.5px;margin-top:30px"></div>
            </div>

            <div class="col-sm-6 mix">
                <div class="item " id="upload-demo_6" style="width:400px;background-image:url('https://dummyimage.com/380x418.2/807680/fff')"></div>
                <input type="file" onchange="onChangeImage(event,6,'btn_7',570,313.5)">
                <button id="btn_7" class="btn btn-success upload-result_6" style="display:none" required>Apercu</button>
                <div id="upload-demo-i_6" style="background:#e1e1e1;width:570px;height:313.5px;margin-top:30px"></div>
            </div>
            <form action="{{url('image/crop')}}" method="POST" id="this">
                @csrf
                <input type="button" value="NEXT" class="btn btn-danger" onclick="uploadResult()"/>
            </form>
        </div>
    </div>
</section>

@endsection