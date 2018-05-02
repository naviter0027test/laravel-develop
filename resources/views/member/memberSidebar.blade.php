<div class="memberSidebar col-xs-3 col-sm-3 col-md-3">
    <p class="col-xs-12"><label class="glyphicon glyphicon-edit col-xs-1"></label><a href="/member/0/edit" class="col-xs-9">{{ trans('member.profile') }}</a></p>
    @if (session()->has('active') && session()->get('active') == "N")
    <p class="col-xs-12"><label class="glyphicon glyphicon-send col-xs-1"></label><a href="/member/verifyPage" class="col-xs-9">{{ trans('member.verify') }}</a></p>
    @endif
    <p class="col-xs-12"><label class="glyphicon glyphicon-log-out col-xs-1"></label><a href="/member/logout" class="col-xs-9">{{ trans('member.logout') }}</a></p>
</div>

