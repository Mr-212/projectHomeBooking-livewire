<div>
    <div class="row">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
                {{--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
            </div>
        </div>

    </div>

    <!-- Content Row -->
    {{--<div class="row">--}}
        @if($item_type == 'before_dd')
            <livewire:client.tables.outstanding-items-before-due-diligence-table />
        @else
            <livewire:client.tables.outstanding-items-before-expire-table params="" />
        @endif
</div>

@push('scripts')
    <script>
        $(document).find('input:checkbox').click(function () {
            if($(this).is(':checked')) {
                var now = new Date();
                var dateString = now.toLocaleTimeString()+ ' '+ now.toLocaleDateString();
                $(this).parent().siblings('#item_checked_at').text(dateString);
                window.location.href = '/items/checklist/'+$(this).val();

            }
            else
                $(this).parent().siblings('#item_checked_at').val('').text('');

        })

    </script>
@endpush
