@extends('layouts.land')

@section('content')
    <br><br><br>
    <section class="mt-5">
    </section>

    <div class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 probootstrap-animate" data-animate-effect="fadeInLeft">
                    <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach($faq as $item)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h3 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $item->id }}" aria-expanded="false" aria-controls="collapseTwo">
                                            {{ $item->title }}
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse{{ $item->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>{{ $item->text }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- END panel-group -->
                </div>
            </div>
        </div>
    </div>
@endsection
