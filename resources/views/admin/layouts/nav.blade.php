<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard pull-left"></i>
           <span class="pull-left" style="margin-left:25px;">Dashboard</span>
                            
           <i class="fa fa-angle-left pull-left"></i>
           <div class="clearfix">
                            
            </div>
    </a>
    <ul class="treeview-menu">
    
        <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                <li><a href="{{url('adminpanel/sitesetting')}}"><i class="fa fa-circle-o"></i>الاعدادات</a></li>

    </ul>
</li>

{{-- USERS --}}
<li class="treeview">
    <a href="#">
        <i class="fa fa-users pull-left"></i>
           <span class="pull-left" style="margin-left:25px;">التحكم  فى الاعضاء</span>
                            
           <i class="fa fa-angle-left pull-left"></i>
           <div class="clearfix">
                            
            </div>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> اضف عضو</a></li>
        <li><a href="{{url('adminpanel/users')}}"><i class="fa fa-circle-o"></i>كل الاعضاء</a></li>

    </ul>
</li>

{{-- Bildings --}}
<li class="treeview">
    <a href="#">
        <i class="fa fa-users pull-left"></i>
           <span class="pull-left" style="margin-left:25px;">التحكم  فى العقارات</span>
                            
           <i class="fa fa-angle-left pull-left"></i>
           <div class="clearfix">
                            
            </div>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('adminpanel/bu/create')}}"><i class="fa fa-circle-o"></i> اضف عقار</a></li>
        <li><a href="{{url('adminpanel/bu')}}"><i class="fa fa-circle-o"></i>كل العقارات</a></li>

    </ul>
</li>
