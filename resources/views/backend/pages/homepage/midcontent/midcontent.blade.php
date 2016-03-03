<div class="col-xs-3"> <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-left">
      <li class="active"><a href="#home" data-toggle="tab">Left Content</a></li>
      <li><a href="#profile" data-toggle="tab">Mid Content</a></li>
      <li><a href="#messages" data-toggle="tab">Right Content</a></li>
    </ul>
</div>

<div class="col-xs-9">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            @include('backend.pages.homepage.midcontent.left')
        </div>
        <div class="tab-pane" id="profile">
            @include('backend.pages.homepage.midcontent.mid')
        </div>
        <div class="tab-pane" id="messages">
            @include('backend.pages.homepage.midcontent.right')
        </div>
    </div>
</div>  
<div class="clearfix" ></div>