@extends('layouts.masterPharmacy')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-xl-12">
                <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#wait-acceptance" aria-controls="wait-acceptance" aria-selected="true"> في
                                انتظار القبول
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#wait-payment" aria-controls="wait-payment" aria-selected="false">
                                في انتظار الدفع
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#wait-delivery" aria-controls="wait-delivery" aria-selected="false">
                                في انتظار التوصيل
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#completed" aria-controls="completed" aria-selected="false">
                                مكتملة
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#rejected" aria-controls="rejected" aria-selected="false">
                                غير متوفرة
                            </button>
                        </li>

                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#not-completed" aria-controls="not-completed" aria-selected="false">
                                مرفوضه من قبل العميل
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        @include('pharmacy.orders.state.wait-acceptance')
                        @include('pharmacy.orders.state.wait-payment')
                        @include('pharmacy.orders.state.wait-delivery')
                        @include('pharmacy.orders.state.completed')
                        @include('pharmacy.orders.state.not-completed')
                        @include('pharmacy.orders.state.rejected')
                    </div>
                </div>
            </div>


        </div>

    </div>

    @if(session('tapState'))
    <script>
        // const tap = document.querySelectorAll('.nav-item button');
        // for(i=0;i<tap.length ;i++)
        // {
        //     tap[i].classList.remove('active');
        // }
    
        // for(i=0;i<tap.length ;i++)
        // {   
        //     if(tap[i].getAttribute('data-bs-target')=="#{{ session()->get('tapState') }}")
        //     tap[i].classList.toggle('active');
            
        // }
        $(document).ready(function(){
        $("button[data-bs-target=\'#{{ session('tapState') }}\']").trigger('click');

    });

        //   console.log(tap);
                // alert(tap[1].getAttribute('data-bs-target'));
    //   var elemt=document.querySelector("button[data-bs-target=]").classList.toggle('active');
    // tap[1].classList.toggle('active');
    </script>
        
    @endif
        
   

  
    
@stop
