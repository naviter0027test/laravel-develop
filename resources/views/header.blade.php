<nav class="navbar header col-xs-12 col-sm-12 col-md-12">
    <div class="container-fluid">
        <button type="button" class="navbar-toggle glyphicon glyphicon-option-horizontal" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        </button>
        <a class="navbar-brand" href="/">
            <label class="logoAbs">abs</label><label class="logoTech">Tech</label>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav topmenu">
            <li>
                <label class="glyphicon glyphicon-heart"></label>
                <a href="/onepage/1">{{ trans('header.about_us') }}</a>
            </li>
            <li>
                <label class="glyphicon glyphicon-bookmark"></label>
                <a href="/news">{{ trans('header.news') }}</a>
            </li>
            @if (session()->has('mid'))
            <li>
                <label class="glyphicon glyphicon-cog"></label>
                <a href="/member/0">{{ trans('member.main') }}</a>
            </li>
            @else
            <li>
                <label class="glyphicon glyphicon-user"></label>
                <a href="/member/">{{ trans('header.mem_login') }}</a>
            </li>
            <li>
                <label class="glyphicon glyphicon-plus"></label>
                <a href="/member/create">{{ trans('header.mem_add') }}</a>
            </li>
            @endif
            <li>
                <label class="glyphicon glyphicon-envelope"></label>
                <a href="/contact">{{ trans('header.contact') }}</a>
            </li>
            <li>
                <label class="glyphicon glyphicon-globe"></label>
                <a href="/chooseLan">{{ trans('header.choose_lan') }}</a>
            </li>
        </ul>
    </div>
</nav>

