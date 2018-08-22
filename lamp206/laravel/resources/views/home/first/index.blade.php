 @extends('home.layout.homes')


@section('title',$title)


@section('header')
      <link href="home/css/hmstyle.css" rel="stylesheet" type="text/css"/>
        <link href="home/css/skin.css" rel="stylesheet" type="text/css" />
        <script src="home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
        <script src="home/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

@endsection

  @section('container')   
                     

       <div class="banner">
          
                
                <div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
               
                   <ul class="am-slides">
                     @foreach($res as $k=>$v)
                        <li class="banner2"><a href="introduction.html">
                         <a href="{{$v->url}}" target="_blank">
                            <img src="{{$v->gpic}}" /></a></li>

                           @endforeach
                    </ul>
                 
                   
                </div>
                <div class="clear"></div>  
          
        </div> 

            <!-- 广告 -->
             <div class="am-container activity ">
                        <!-- <div class="shopTitle ">
                            <h4>活动</h4>
                            <h3>每期活动 优惠享不停 </h3>
                            <span class="more ">
                              <a href="# ">全部活动<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
                        </span>
                        </div> -->
                      <div class="am-g am-g-fixed ">
                        @foreach($adv as $k=>$v)
                        <div class="am-u-sm-3 ">
                            <div class="icon-sale one " ></div>  
                                <h4>{{$v->advername}}</h4>                         
                            <div class="activityMain ">
                               <a href="{{$v->piclink}}"> <img src="{{$v->gpic}} "></img></a>
                            </div>
                            <div class="info ">
                                <h6>{{$v->desc}}</h6>
                            </div>                                                      
                        </div>
                        @endforeach

                      </div>
                   </div>
                    <div class="clear "></div -->





       
@endsection


