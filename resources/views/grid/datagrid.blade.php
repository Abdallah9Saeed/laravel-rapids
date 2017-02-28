<div class="table-responsive">
    <table class="table">
        <tr>
            @foreach($fields as $cell)
                <th>{{ $cell->name }}</th>
            @endforeach
            @if($actions)
                <th>@lang('rapids::rapids.actions')</th>
            @endif
        </tr>
        @foreach($paginator as $row)
            <tr>
                {{--@if($hasBatch && $__batch_id = $row->getKey())--}}
                    {{--<td>--}}
                        {{--<input type="checkbox" class="lego-batch-checkbox" data-batch-id="{{ $__batch_id }}">--}}
                    {{--</td>--}}
                {{--@endif--}}
                @foreach($fields as $cell)
                    <td>{{ $row[$cell->field_id]}}</td>
                @endforeach


                @if($actions)
                    <td>
                        @if (in_array("show", $actions))
                            <a class="" title="@lang('rapids::rapids.show')" href="{!! $url !!}?show={!! $row['id'] !!}">
                                <span class="glyphicon glyphicon-eye-open"> </span>
                            </a>
                        @endif
                        @if (in_array("modify", $actions))
                            <a class="" title="@lang('rapids::rapids.modify')" href="{!! $url !!}?modify={!! $row['id'] !!}">
                                <span class="glyphicon glyphicon-edit"> </span>
                            </a>
                        @endif
                        @if (in_array("delete", $actions))
                            <a class="text-danger" title="@lang('rapids::rapids.delete')" href="{!! $url !!}?delete={!! $row['id'] !!}">
                                <span class="glyphicon glyphicon-trash"> </span>
                            </a>
                        @endif
                    </td>
                @endif
            </tr>
        @endforeach
    </table>
</div>

<div class="text-center">
    {!! $paginator->links() !!}
</div>

{{--@include('lego::default.snippets.bottom-buttons', ['widget' => $grid])--}}