@extends('layouts.layouts')

@section('styles')
@stop

@section('content')

@include('layouts.pagetitle')
<section id="project-version-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="gallery-filter">
                    <li data-filter="all">
                        <span>All</span>
                    </li>
                    <li data-filter=".kitchen">
                        <span>Kitchen</span>
                    </li>
                    <li data-filter=".bathroom">
                        <span>Bathroom</span>
                    </li>
                    <li data-filter=".drain">
                        <span>Drain Cleaning</span>
                    </li>
                    <li data-filter=".plumbing">
                        <span>plumbing</span>
                    </li>
                    <li data-filter=".outside">
                        <span>outside</span>
                    </li>
                    <li data-filter=".server-line">
                        <span>sever lines cleaning</span>
                    </li>
                    <li data-filter=".tank">
                        <span>tank leak inspections</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row normal-gallery gallery-v4" id="image-gallery-mix">
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12  tank outside">
                <div class="img-wrap">
                    <img src="img/project-v1/1.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/1.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 plumbing outside">
                <div class="img-wrap">
                    <img src="img/project-v1/2.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/2.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 drain plumbing bathroom">
                <div class="img-wrap">
                    <img src="img/project-v1/3.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/3.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 kitchen outside drain bathroom">
                <div class="img-wrap">
                    <img src="img/project-v1/4.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/4.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12  tank outside">
                <div class="img-wrap">
                    <img src="img/project-v1/9.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/9.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 plumbing outside">
                <div class="img-wrap">
                    <img src="img/project-v1/10.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/10.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 drain plumbing bathroom">
                <div class="img-wrap">
                    <img src="img/project-v1/11.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/11.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 kitchen outside drain bathroom">
                <div class="img-wrap">
                    <img src="img/project-v1/12.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/12.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 kitchen  bathroom">
                <div class="img-wrap">
                    <img src="img/project-v1/5.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/5.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 kitchen drain ">
                <div class="img-wrap">
                    <img src="img/project-v1/6.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/6.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 kitchen drain bathroom">
                <div class="img-wrap">
                    <img src="img/project-v1/7.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/7.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12 kitchen drain bathroom">
                <div class="img-wrap">
                    <img src="img/project-v1/8.jpg" alt="">
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="fancybox" href="img/project-v1/8.jpg"><h4>Kitchken Maintance</h4>
                                    <span>Pipe Leakages Fixed</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@stop

@section('scripts')
@stop