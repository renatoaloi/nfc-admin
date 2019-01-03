@if ($breadcrumbs)
  <ul class="breadcrumb">
    @foreach($breadcrumbs as $breadcrumb)
      @if($breadcrumb->first)
        <li><a href="{{ $breadcrumb->url }}"><i class="icon-home2 position-left"></i> {{ $breadcrumb->title }}</a></li>
      @elseif(!$breadcrumb->last)
        <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
      @else
        <li class="active">{{ $breadcrumb->title }}</li>
      @endif
    @endforeach
  </ul>

  <!-- <ul class="breadcrumb-elements">
    <li><a href="2_col.html#"><i class="icon-comment-discussion position-left"></i> Link</a></li>
    <li class="dropdown">
      <a href="2_col.html#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-gear position-left"></i>
        Dropdown
        <span class="caret"></span>
      </a>

      <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="2_col.html#"><i class="icon-user-lock"></i> Account security</a></li>
        <li><a href="2_col.html#"><i class="icon-statistics"></i> Analytics</a></li>
        <li><a href="2_col.html#"><i class="icon-accessibility"></i> Accessibility</a></li>
        <li class="divider"></li>
        <li><a href="2_col.html#"><i class="icon-gear"></i> All settings</a></li>
      </ul>
    </li>
  </ul> -->
@endif
